<?php

require __DIR__ . '/headerform.php';
                
                $konfirmasi = [
                    'ya' => 'ya',
                    'tidak' => 'tidak'
                ];

                $errors = [];

                $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

                if ($request_method ==='GET') {
                        require __DIR__ . '/get.php';
                }elseif ($request_method ==='POST') {
                    require __DIR__ . '/post.php';
                }

                ?>