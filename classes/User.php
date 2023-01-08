<?php

    class User {

        private $id;
        private $name;
        private $lastname;
        private $email;
        private $password;
        private $image;
        private $token;
        private $bio;

        public function getid() {
            return $this->id;
        }

        public function getname() {
            return $this->name;
        }

        public function setname($name) {
            $this->name = $name;
        }

        public function getlastname() {
            return $this->lastname;
        }

        public function setlastname($lastname) {
            $this->lastname = $lastname;
        }

        public function getemail() {
            return $this->email;
        }

        public function setemail($email) {
            $this->email = $email;
        }

        public function getpassword() {
            return $this->password;
        }

        public function setpassword($password) {
            $this->password = $password;
        }

        public function getimage() {
            return $this->image;
        }

        public function setimage($image) {
            $this->image = $image;
        }

        public function gettoken() {
            return $this->token;
        }

        public function settoken($token) {
            $this->token = $token;
        }

        public function getbio() {
            return $this->token;
        }

        public function setbio($bio) {
            $this->bio = $bio;
        }
    }

    interface UserDAOinterface {
        public function create(User $user);
    }