<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000028',
        'locale' => 'pt_BR',
        'title' => 'Contextos',
        'toc' => 'journal/toc/000005',
        'key' => 'journal.managementPages.readingTools.contexts',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>Cada conjunto de Ferramentas de Leitura é composto de ferramentas individuais (por exemplo, Estudos Relacionados, Forum On-line, etc.) com cada ferramenta consistindo de bases de dados relevantes agrupadas por contexto. Pode-se incluir, editar ou excluir bases de dados, bem como o contexto a que pertence.</p><p><em>Metadados para Itens em um Contexto</em>. O Editor Gerente pode alterar o título da ferramenta. Está também disponível a opção para determinar se as palavras-chave do autor (as padrão), o nome do autor (por exemplo, para uso com Outros Trabalhos do Autor) ou termos de indexação geográfica serão usadas na pesquisa dentro das bases de dados. Outra opção, usada com Definir Termos, permite ao Leitor escolher qual o termo para pesquisa com um clique duplo sobre qualquer palavra do texto lido. Editores Gerentes podem habilitar estas opções para construir suas próprias ferramentas de busca.</p><p><em>Editar Buscas para cada Ferramenta</em>. Através da opção Buscas, o Editor Gerente pode editar ou remover a URL de busca para cada base de dados em uma ferramenta, assim como reordenar as bases de dados que aparecem na ferramenta. Para cada base de dados, uma URL é fornecida, permitindo ao Leitor aprender mais sobre a base de dados, e uma URL para permitir a busca em si. Existem dois tipos de de buscas que podem ser configuradas, uma busca via GET, e se esta não funcionar com a base de dados uma busca via POST. </p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Buscas via GET',
      ),
      'value' => '<p>Para uma busca via GET, execute uma busca e identifique a URL resultante. Por exemplo, no Google, uma busca por "FOOBAR" resulta na URL</p><p><samp class="code">http://www.google.ca/search?hl=en&q=FOOBAR&meta=</samp></p><p>Substitua o termo de busca, FOOBAR, pela variável &#123;$formKeywords&#125;. Ao encontrar essa variável, o sistema automaticamente a substituirá pelos metadados apropriados. Tal alteração apresenta a URL de busca</p><p><samp class="code">http://www.google.ca/search?hl=en&q=&#123;$formKeywords&#125;&meta=</samp></p><p>para a ferramenta. No entanto, alguns parâmetros do exemplo são desnecessários, permitindo o uso de uma URL simplificada do tipo</p><p><samp class="code">http://www.google.ca/search?q=&#123;$formKeywords&#125;</samp></p><p>para a ferramenta.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Buscas via POST',
      ),
      'value' => '<p>Montar buscas para formulários via POST é mais complicado. Novamente, usando o Google como ferramenta, você pode ver o código fonte da página, procurando por <samp class="code">&lt;form action="/search" ...&gt;</samp>, que será a URL inicial <samp class="code">http://www.google.com/search</samp>. Observe a seguir cada elemento <samp class="code">&lt;input ...&gt;</samp> e <samp class="code">&lt;select ... &gt;</samp> no formulário, e adicioná-los como pares <samp class="code">name=value</samp> separados por <samp class="code">&</samp> até o fim da URL. O elemento que especifica o campo que permite ao usuário digitar (no caso do Google, chamado <samp class="code">q</samp>), deve ser também &#123;$formKeywords&#125;, substituído pelo sistema com o valor apropriado.</p><p>Um método mais simples lidar com formularios via POST é utilizar alguma ferramenta ou editor de texto simples, salvando o código fonte do formulário em sua máquina, alterar <samp class="code">method=post</samp> para <samp class="code">method=get</samp> no campo apropriado, e alterar o valor de <samp class="code">action=</samp> para formar uma URL completa, por exemplo, <samp class="code">http://www.google.com/search</samp> e não apenas <samp class="code">/search</samp>. Você pode ver depois o arquivo HTML modificado em seu navegador e usar o metodo GET acima para construir a URL de busca.</p><p>Algumas ferramentas de busca não suportam consultas via GET, e caso o método anterior não funcionar, pode-se inserir dados via POST no campo "Dados via POST". Se o exemplo acima precissase enviar os dados, é necessário digitar <samp class="code">http://www.google.com/search</samp> para a URL de busca e <samp class="code">q=&#123;$formKeywords&#125;</samp> para os dados de POST.<p>Certifique-se do funcionamento correto da URL, substituindo &#123;$formKeywords&#125; por um termo qualqer na URL e testando o retorno da busca se apresenta as informações esperadas. Note que para buscas via POST tal ação pode não ser sempre possível, dependendo da ferramenta. Para URLs que não possuem sistema de busca apropriado, é possível utilizar o Google como ferramenta, restringindo por URL. Um termo de busca do tipo <samp class="code">site:mysite.com FOOBAR</samp> no Google executará uma busca por "FOOBAR" apenas em mysite.com. Esta técnica é utilizada para em várias ferramentas de leitura atuais.</p>',
    ),
  ),
); ?>