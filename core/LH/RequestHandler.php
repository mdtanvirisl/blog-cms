<?php
namespace LH;

class RequestHandler {
    public function postRequest($key) {
        return $_POST[$key] ?? null;
    }

    public function getRequest($key) {
        return $_GET[$key] ?? null;
    }

    public function validateImage($file) {
        $validTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        if (in_array($file['type'], $validTypes)) {
            return true;
        }
        return false;
    }

    public function uploadImage($file) {
        if (!$this->validateImage($file)) return false;
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newName = pathinfo($file['name'], PATHINFO_FILENAME) . '_' . date('YmdHis') . '.' . $ext;
        move_uploaded_file($file['tmp_name'], '../uploads/' . $newName);
        return $newName;
    }
}