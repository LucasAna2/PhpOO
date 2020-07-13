<?php
    require_once 'Pessoa.php';
    require_once 'Carro.php';
    require_once 'Livro.php';

    $pessoa1 = new Pessoa();
    $carro1 = new Carro();
    $livro1 = new Livro();

    $pessoa1->setNome("João");
    $pessoa1->setSexo("Masculino");
    $pessoa1->setIdade("25");
    $pessoa1->setPeso("82");

    $carro1->setMarca("Hyundai");
    $carro1->setModelo("Hb20");
    $carro1->setCor("Branco");
    $carro1->setPlaca("AAAA-0000");

    $livro1->setTitulo("Alice no País das Maravilhas");
    $livro1->setAutor("Lewis Carroll");
    $livro1->setEdicao("Darkside");
    $livro1->setAno("2018");

    $pessoa1->imprimir();
    echo"<br/> <br/>";
    $carro1->imprimir();
    echo"<br/> <br/>";
    $livro1->imprimir();
