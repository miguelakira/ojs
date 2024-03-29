<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'site/topic/000001',
        'locale' => 'pt_BR',
        'title' => 'Instalação',
        'toc' => 'site/toc/000000',
        'key' => 'site.installation',
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
      'value' => '<p>Este sistema é um programa de código livre que pode ser livremente baixado e instalado em praticamentes qualquer computador pessoal ou servidor.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Licença',
      ),
      'value' => '<p>O sistema é distribuido sob os termos da <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License</a>. Um cópia dos termos de licença para redistribuição do código do sistema em seu formato original ou modificado é incluído com pacote.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Requisitos de Sistema',
      ),
      'value' => '<p>Requisitos Básicos para o Ambiente de Servidor (recomendado):</p>
		<ul>
			<li><a href="http://www.php.net/" target="_blank">PHP</a> >= 4.2.x</li>
			<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> >= 3.23.23 (incluindo 4.x) ou <a href="http://www.postgresql.org/" target="_blank">PostgreSQL</a> >= 7.1</li>
			<li><a href="http://httpd.apache.org/" target="_blank">Apache</a> >= 1.3.2x ou >= 2.0.4x</li>
			<li>sistema Operacional: Qualquer Sistema Operacional que suporte o software acima, incluindo <a href="http://www.linux.org/" target="_blank">Linux</a>, <a href="http://www.bsd.org/" target="_blank">BSD</a>, <a href="http://www.sun.com/" target="_blank">Solaris</a>, <a href="http://www.apple.com/" target="_blank">Mac OS X</a>, <a href="http://www.microsoft.com/">Windows</a></li>
		</ul>
		<p>O sistema foi testado até o momento em MySQL e PostgreSQL, entretanto outros gerenciadores de bancos de dados suportados pelo <a href="http://adodb.sourceforge.net/" target="_blank">ADOdb</a> devem funcionar (completa ou parcialmente). Relatórios de compatibilidade e/ou códigos de correção para SGBDs alternativos são sempre bem-vindos.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Download',
      ),
      'value' => '<p>O sistema pode ser baixado do <a href="http://pkp.sfu.ca/ojs/" target="_blank">portal web</a> do Public Knowledge Project.</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Instalação',
      ),
      'value' => '<p>O sistema possui um script de instalação web que guiará o administrador do portal através do processo de instalação.</p>
		<ol>
			<li>
				Baixe o pacote OJS.
			</li>
			<li>
				Descompacte o pacote OJS em seu servidor web e coloque-o no local desejado da árvore de documentos web:<br />
				<tt>$ tar -zxf ojs-2.1.tar.gz<br />
				$ mv ojs-2.1 /var/www/minharevista</tt>
			</li>
			<li>
				Altere as permissões dos seguintes arquivos e diretórios para escrita (por ex., usando chown ou chmod):<br />
				- config.inc.php (optional)<br />
				- public<br />
				- cache<br />
				- cache/t_cache<br />
				- cache/t_config<br />
				- cache/t_compile<br />
				- cache/_db
			</li>
			<li>
				Acesse via o navegador web de sua preferência o endereço da instalação do seu OJS (por ex., http://www.meudominio.com.br/minharevista/) e siga as instruções na tela para concluir a instalação. Leia o docs/README para mais informações sobre o processo de instalação.
			</li>
		</ol>',
    ),
  ),
); ?>