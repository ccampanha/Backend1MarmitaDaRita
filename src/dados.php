<?php

    $title = "Marmita da Rita";
    $desenvolvedor = "Cristiana Campanha";
    
    $marmitas = array(
        0 => array('id' => '1', 
                'nome' => 'Caezar Salad', 
                'valor' => 'R$20.00', 
                'tamanho' => 'R$', 
                'ingredientes'  => 'Alface americana, queijo parmesão, croutons e molho caesar',
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/CaezarSalad.jpg'),
        1 => array('id' => '2', 
                'nome' => 'Espaguetti ao Funghi', 
                'valor' => 'R$30.00',
                'tamanho' => 'Individual',
                'ingredientes' => 'Espaguetti, cogumelo portobelo, molho branco e ervas finas',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/EspaguetiAoFungui.jpg'),
        2 => array('id' => '3', 
                'nome' => 'Filé de Atum com Arroz e Salada', 
                'valor' => 'R$40.00', 
                'tamanho' => 'Individual', 
                'ingredientes'=> 'Filé de Atum com ervas finas, arroz branco e salada de pepino',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/FileDeAtumComArrozESalada.jpg'),
        3 => array('id' => '4', 
                'nome' => 'Filé de Frango com Salada Mista', 
                'valor' => 'R$30.00', 
                'tamanho' => 'Individual','ingredientes'  => 'Cubos de peito de frango com salada de tomate, repolho roxo, pepino,  milho, fava, tomate e ovos de codorna',
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/FileDeFrangoComSaladaMista.jpg'),
        4 => array('id' => '5', 
                'nome' => 'Hamburguer com Fritas', 
                'valor' => 'R$30.00', 
                'tamanho' => 'Individual', 
                'ingredientes'  => 'Hamburguer de picanha com salada e batatas fritas',
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/imghamburguer.jpg'),
        5 => array('id' => '6', 
                'nome' => 'Lazanha Quatro Queijos', 
                'valor' => 'R$30.00', 
                'tamanho' => 'Individual', 
                'ingredientes'  => 'Lazanha com parmezão, muzzarela, gorgonzola e gruyere',
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/Lazanha4Queijos.jpg'),
        6 => array('id' => '7', 
                'nome' => 'Lombinho com Cuzcuz Marroquino', 
                'valor' => 'R$40.00', 
                'tamanho' => 'Individual', 
                'ingredientes'  => 'Lombinho de porco, cuscuz marroquino, milho, figo, abobrinha', 
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/LombinhoComCuzcuz.jpg'),
        7 => array('id' => '8', 
                'nome' => 'Pene ao Molho Branco com Espinafre e Brocolis', 
                'valor' => 'R$30.00', 
                'tamanho' => 'Individual', 
                'ingredientes'  => 'Pene ao Molho Branco com espinafre e brocolis', 
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/PeneAoMolhoBrancoComBrocolis.jpg'),
        8 => array('id' => '9', 
                'nome' => 'Picadinho de Carne com Grao de Bico e Arroz', 
                'valor' => 'R$30.00', 
                'tamanho' => 'Individual', 
                'ingredientes' => 'Picadinho de Carne com grao de bico e arroz branco', 
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/PicadinhoDeCarneComArrozEGraoDeBico.jpg'),
        9 => array('id' => '10', 
                'nome' => 'Rosbife com salada de aspargos', 
                'valor' => 'R$40.00', 
                'tamanho' => 'Individual', 
                'ingredientes'  => 'Medalhão de alcatra, batata frita, salada de brócolis e cenoura', 
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/MedalhaoComFritas.jpg'),
        10 => array('id' => '11',
                'nome' => 'Tábua de Sushi ', 
                'valor' => 'R$50.00', 
                'tamanho' => 'Duas Pessoas', 
                'ingredientes' => 'Tabua de sushis variados, com salmão, atum, pepino, molhos', 
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/Sushi.jpg'),
        11 => array('id' => '12',
                'nome' => 'Legumes Grelhados', 
                'valor' => 'R$30.00', 
                'tamanho' => 'Duas pessoas', 
                'ingredientes'  => 'Pimentão, tomate, aspargos, beringela, abobrinha gralhados',
                'descricao'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil est ducimus ut obcaecati 
                               molestias commodi doloremque nam repellat voluptatum, maiores natus quo ullam amet, tenetur culpa animi 
                               voluptatibus accusantium.',
                'imagem' => '../img/LegumesGrelhados.jpg')
    );