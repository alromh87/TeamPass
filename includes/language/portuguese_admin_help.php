<?php
//PORTUGUESE
if (!isset($_SESSION['settings']['cpassman_url'])) {
    $TeamPass_url = '';
}else{
    $TeamPass_url = $_SESSION['settings']['cpassman_url'];
}


$LANG['help_on_folders'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Esta pagina é usuada para criar DIRETóRIOS como também gerenciar-los.<br /> Um diretório é necessario para organizar seus itens. É muito similar aos diretórios (pastas) do Windows.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Diretório de baixo nivel, são chamados de ROOT (raiz).<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Todos os diretórios e sub-diretórios são criados como uma estrutura de arvore.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Cada diretório é associado a um 'depth' level em sua estrutura. </div> <div id='accordion'> <h3><a href='#'>Adicione um novo DIRETÓRIO</a></h3> <div> Basta clicar no icone <img src='includes/images/folder--plus.png' alt='' />. Um box de dialogo será exibido para que entre com a seguinte informação:<br /> - O nome do diretório ou titulo<br /> - Se ele tem algum diretório pai<br /> - a complexidade de senha exigida. Quando criar novas senhas, a senha não poderá ser criado se não atingir o minimo exigido<br /> - a renovação da senha expressado em meses(pode ser necessario forçar a atualização da senha) </div> <h3><a href='#'>Editar um diretório existente</a></h3> <div> Alterar o nome do diretório, a complexidade, os diretórios pais, o tempo de renovação, basta você selecionar a celula necessaria para editar.<br /> Ao selecionar, vai tornar-la editavel. Altere para o valor necessarioe clique no icone <img src='includes/images/disk_black.png' alt='' /> para salva, no icone <img src='includes/images/cross.png' alt='' /> para cancelar.<br /> <p style='text-align:center;'> <img src='includes/images/help/folders_1.png' alt='' /> </p> <div style='margin:10px Opx 0px 20px;'> Será avisado que a mudança de um diretório PAI, vai alterar todos os seus sub-diretórios. </div> </div> <h3><a href='#'>Deletar um diretório</a></h3> <div> Se você esta decidido a apagar um diretório, basta clica no icone<img src='includes/images/folder--minus.png' alt='' />.<br /> Isto ira apagiar o diretório e todos os itens dentro deste diretorio (TENHA MUITA ATENÇÃO, OS DADOS SÃO IRRECUPERAVEIS AO APAGAR!!!!) <p style='text-align:center;'> <img src='includes/images/help/folders_2.png' alt='' /> </p> </div> <h3><a href='#'>Ajustes especiais</a></h3> <div> Dois ajustes se existe em um diretório.<br /> O item 1 permite a criação sem respeitar o nível de complexidade exigido para a senha.<br /> O item permite a modificação 2d sem respeitar o nível de complexidade exigido para a senha.<br /> Você também pode combinar os dois juntos.<br /> Você tambem pode usar temporariamente. <p style='text-align:center;'> <img src='includes/images/help/folders_3.png' alt='' /> </p> </div> </div>";
$LANG['help_on_roles'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Esta pagina é usada para criar e gerenciar REGRAS.<br /> Uma regra pode associar ou que pode ficar um diretorio permitido ou oculto (por exemplo)..<br /> Uma vez que tenha verias regras definidas, voce pode associar aos USUARIOS que vão usar. </div> <div id='accordion'> <h3><a href='#'>Adicionar nova REGRA</a></h3> <div> Basta clicar no icone <img src='includes/images/users--plus.png' alt='' />. Uma caixa de dialogo será exibido para que entre com o TITULO da regra. </div> <h3><a href='#'>Logo, permite ou proibe a um diretório</a></h3> <div> Você podera usar como uma regra de matriz (Regras vs Diretórios) para definir o tipo de permissão. As celulas em vermelhas são NEGADAS e as marcadas em VERDES quer dizer que tem acesso.<br /> Para alterar, basta clicar na regra que vai alternar as corer.<br/> <p style='text-align:center;'> <span style='text-align:center;'><img src='includes/images/help/roles_1.png' alt='' /></span> </p> Na tela anterior de captura, poderá ver que ' NEED CAPTURE TO TRANSLATE ?????'In previous screen capture, you can see that folder 'Cleaner' is allowed to role 'Dev' but not for role 'Commercial'. </div> <h3><a href='#'>Atualiza manualmente a matriz</a></h3> <div> Clique no icone <img src='includes/images/arrow_refresh.png' alt='' />. </div> <h3><a href='#'>Edita a regra</a></h3> <div> Você pode alterar o titulo de uma regra sem ter impactos nas condições já criadas.<br /> Selecione a regra e logo clique no icone <img src='includes/images/ui-tab--pencil.png' alt='' />.<br /> Sera exibido um 'popup' de dialogo em qual solicita que entre com um novo titulo para a regra. </div> <h3><a href='#'>Deletar a regra</a></h3> <div> Se você esta decidido a excluir uma determinada regra.<br /> Selecione a regra que deseja excluir, e logo clique no icone <img src='includes/images/ui-tab--minus.png' alt='' />.<br /> Será exibido um 'popup' de confirmação para a ação desejada. </div> </div>";
$LANG['help_on_users'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Esta pagina e usada para criar e administrar usuarios.<br> Uma conta de usuário é necessária para cada pessoa física que vai acessar o TeamPass.<br> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>1ro passo é criar as REGRAS.<br> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>2ndo passo é customizar cada pasta que terá ou não terá acesso. </div> <div id='accordion'> <h3><a href='#'>Adicionar novo USUARIO</a></h3> <div> Basta clicar no icone <img src='includes/images/user--plus.png' alt=''>. Uma caixa de dialogo dedicado sera exibida que será necessário preencher com:<br> - o login de usuario<br> - a senha(pode ser gerado na primeira conexão)<br> - um e-mail valido<br> - se o usuário será Administrador (acesso total as funcionalidades)<br> - se o usuário sera Gerenciador (total acesso para os itens)<br> - se o usuário vai ter diretórios pessoais </div> <h3><a href='#'>Adicionar uma REGRA para o USUARIO</a></h3> <div> Você pode associar um USUARIO a quantas REGRAS você quiser. Basta clicar no icone correspondente <img src='includes/images/cog_edit.png' alt=''>.<br> Será exibido uma caixa de dialogo especifica para as regras que você deseja ou não deseja para este usuário.<br><br> Quando a regra estiver adicionada ao usuarios, então o usuario vai ter acesso as pastas especificadas na REGRA. Sempre e quando, estiver permitida.(Lembre-se, podem existir diretórios ocultos).<br><br> Você também pode permitir ao usuário ver ou não ver diretórios ocultos. <div style='margin:2px Opx 0px 20px;'>Por exemplo:  <p style='margin-left:20px;margin-top: 2px;'> - USER1 é associado a REGRA1 e REGRA2. <br> - REGRA1 esta definido que pode acessar os diretórios F1 e F2. <br> - F1 tem 4 sub-diretórios S1, S2, S3 e S4.<br> - Este USER1 poderá acessar ao F1, F2, S1, S2, S3 e S4.<br> - Agora você pode customizar que o USER1 não pode acessar o S4 (por exemplo) usando esta pagina de customização. </p> </div> </div> <h3><a href='#'>É Administrador então é 'GOD' da ferramenta</a></h3> <div> Você pode decidir quem sera 'GOD' bastando clicar no check-box.<br> GOD é permitido para todas as funcionalidades do TeamPass sem nenhuma restrição. Mas por favor, tenha muito cuidado!!!! <p style='text-align:center;'> <img src='includes/images/help/users_1.png' alt=''> </p> </div> <h3><a href='#'>É Gerenciador</a></h3> <div> Você pode decidir que vai ser Gerenciador com apenas um clique no check-box.<br> Um gerenciador pode modificar qualquer item cadastrado, mesmo que ele não tenha criado.<br> Um gerenciador pode acessar somente os que o Administrador permitir. Por exemplo, você pode ter vários Gerenciadores para departamentos diferentes. <p style='text-align:center;'> <img src='includes/images/help/users_2.png' alt=''> </p> </div> <h3><a href='#'>Delete a USER</a></h3> <div> Se voce precisa excluir um usuário, basta clicar no icone<img src='includes/images/user--minus.png' alt=''>. <p style='text-align:center;'> <img src='includes/images/help/users_3.png' alt=''> </p> </div> <h3><a href='#'>Altera a senha de um usuário.</a></h3> <div> Você pode alterar a senha de um usuário bastando clicar neste icone.<img src='includes/images/lock__pencil.png' alt=''>.<br> Na primeira conexão o usuário é obrigado a alterar a senha. <p style='text-align:center;'> <img src='includes/images/help/users_4.png' alt=''> </p> </div> <h3><a href='#'>Altera o e-mail do usuario</a></h3> <div> Se voce decidir definir uma senha para o usuário, basta clicar no icone <img src='includes/images/mail--pencil.png' alt=''>.<br> <p style='text-align:center;'> <img src='includes/images/help/users_5.png' alt=''> </p> </div> </div>";
?>
