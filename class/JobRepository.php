<?php 

    class JobRepository extends Repository {
        public function __construct() {
            parent::__construct('job');
        }
    }