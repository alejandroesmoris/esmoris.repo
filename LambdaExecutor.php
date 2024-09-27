<?php

class LambdaExecutor {
    private $lambdas = [];

    // Method to add a lambda function
    public function addLambda(callable $lambda) {
        $this->lambdas[] = $lambda;
    }

    // Method to execute all stored lambda functions
    public function executeLambdas() {
        foreach ($this->lambdas as $lambda) {
            $lambda(); // Call the lambda function
        }
    }
}

// Ejemplo de uso
$executor = new LambdaExecutor();

// Añadir lambdas
$executor->addLambda(function() {
    echo "Lambda 1: Hola, mundo!\n";
});

$executor->addLambda(function() {
    echo "Lambda 2: Preparando PHP con funciones anónimas.\n";
});

// Ejecutar lambdas
$executor->executeLambdas();
?>