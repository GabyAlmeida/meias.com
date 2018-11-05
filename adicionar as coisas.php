INSERT INTO `cupom` (`idcupom`, `nomecupom`, `desconto`) VALUES
(2, 'teste', 20),
(3, 'descontao', 50);


INSERT INTO `endereco` (`idendereco`, `idusuario`, `rua`, `bairro`, `cidade`, `cep`) VALUES
(5, 1, 'Av. Nestor FogaÃƒÂ§a', 'Centro', 'SÃƒÂ£o Miguel Arcanjo', '18230000'),
(6, 2, 'teste', 'Centro', 'SÃƒÂ£o Miguel Arcanjo', '18230000');


INSERT INTO `produtos` (`idproduto`, `preco`, `nomeproduto`, `descricao`, `tamanho`, `imagem`, `sexo`, `categoria`) VALUES
(1, 30, 'Meias Monalisa', 'Meias verde ', 'm', './publico/images/15299296535b30dfb598e27.jpg', 'femi', 'gotica'),
(2, 40, 'quadro renascentista', 'muito lindo para esquentar seu pÃƒÂ©', 'g', './publico/images/15299298885b30e0a06fa7f.jpg', 'femi', 'bela'),
(3, 35, 'meias mar', 'meias azul', 'm', './publico/images/15299300205b30e12417857.jpg', 'masc', 'diferente'),
(4, 40, 'meias van gogh', 'meias noite estrelada', 'p', './publico/images/15299300945b30e16ea6967.jpg', 'kids', 'gotica'),
(5, 45, 'O beijo', 'meia amarela', 'p', './publico/images/15299335155b30eecbf2aa0.jpg', 'masc', 'bela'),
(6, 50, 'Na Chuva', 'meias cinza', 'p', './publico/images/15299335785b30ef0a1b23b.jpg', 'kids', 'gotica'),
(7, 25, 'dog', 'meias de cachorro', 'g', './publico/images/15299336245b30ef389e671.jpg', 'masc', 'diferente'),
(8, 55, 'no jardim', 'meias cinza', 'm', './publico/images/15299336815b30ef71eb7c4.jpg', 'femi', 'gotica'),
(9, 70, 'maromba', 'cor azul', 'g', './publico/images/15299337535b30efb9876d2.png', 'masc', 'diferente'),
(10, 30, 'mario', 'meias vermelha', 'g', './publico/images/15299338235b30efff0c1f7.jpg', 'kids', 'diferente'),
(11, 40, 'meias frida', 'meias colorida', 'm', './publico/images/15299340035b30f0b3adc27.jpg', 'femi', 'diferente'),
(12, 40, 'meias odissey', 'meias vermelha', 'g', './publico/images/15299340655b30f0f138da7.jpg', 'masc', 'diferente'),
(13, 35, 'meias dogs', 'meias estampada', 'p', './publico/images/15299341245b30f12ca154d.jpg', 'kids', 'diferente'),
(14, 50, 'Gritooo', 'meias do desespero', 'p', './publico/images/15300502235b32b6afca6a1.jpg', 'femi', 'gotica'),
(15, 30, 'Vaso', 'um lindo vaso de flor no seu pÃƒÂ©', 'p', './publico/images/15300518355b32bcfb3cbd3.jpg', 'femi', 'bela'),
(16, 80, 'Frida lindissima', 'uma meias toda da feminista', 'p', './publico/images/15300522245b32be8027592.jpg', 'femi', 'bela'),
(17, 55, 'Quebra-CabeÃƒÂ§a', 'Para sua crianÃƒÂ§a arrasar', 'p', './publico/images/15300523905b32bf2650a9b.jpg', 'kids', 'diferente'),
(18, 88, 'Patins', 'um patins colorido pra caramba', 'm', './publico/images/15300526415b32c021e4d43.jpg', 'kids', 'diferente'),
(19, 66, 'All-star', 'um tÃƒÂªnis que ÃƒÂ© uma meias ', 'p', './publico/images/15300527205b32c0700c1ea.jpg', 'masc', 'gotica'),
(20, 70, 'Feiraa', 'meias de banana', 'm', './publico/images/15300527775b32c0a90712e.jpg', 'femi', 'bela');

INSERT INTO `usuario` (`idusuario`, `nomeusuario`, `email`, `senha`, `cpf`, `datadenascimento`, `sexo`, `tipousuario`) VALUES
(1, 'gabriely', 'gabriely@gmail.com', 'gabriely123', '112334545', '29/01/2002', 'femi', 'admin'),
(2, 'teste', 'gabriely123@gmail.com', 'teste123', '905.293.370-70', '29/01/2002', 'm', 'user');