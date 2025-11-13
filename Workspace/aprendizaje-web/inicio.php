<?php include "_partials/header.php"?>
<?php include "_partials/nav.php"?>

    <section>
        <h1>Bienvenido al sitio web de <strong>Aprendizaje web.</strong></h1>
        
        <p>Aquí encontrarás recursos para mejorar tus habilidades en desarrollo front-end, especialmente en HTML, CSS y JavaScript.</p>

        <p>Nuestro objetivo es ayudarte a dominar el arte de la programación web. Si eres principiante, te recomendamos comenzar por la sección Introducción a HTML. Para los más avanzados, tenemos guías sobre frameworks modernos como Vue.js y React.
        </p>

        <article>
            Consulta nuestra <a href="#" target="_blank">documentación oficial</a> para acceder a tutoriales detallados. También puedes visitar el blog de <a href="#" target="_blank">María López</a>, una experta en accesibilidad web.
        </article>

    </section>

    <section>
        <h2>Que es HTML</h2>

        <p><abbr title="html">HTML</abbr> significa <i>HyperText Markup Language</i>, y es la base de cualquier página web. <abbr title="Css">CSS</abbr>(abreviatura de <i>Cascading Style Sheets</i>) se utiliza para definir estilos visuales, mientras que <abbr title="JavaScript">JS</abbr> (abreviatura de <i>JavaScript</i>) añade interactividad.
        </p>    
    </section>

    <section>
        <h2>Aquí tienes un ejemplo de código HTML básico:</h2>

        <pre><code>
            &lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Mi primera p&aacute;gina&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;&iexcl;Hola mundo!&lt;/h1&gt;
    &lt;p&gt;Este es mi primer sitio web.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;  
        </code></pre>

        <h3>Y este es un fragmento de código CSS:</h3>

        <pre><code>
  body {
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}
        </code></pre>
    </section>

    <section>
        <table class="tabla">
        <thead>
            <caption>Comparativa de frameworks front-end</caption>
            <tr>
                <th scope="col">Framework</th>
                <th scope="col">Popularidad</th>
                <th scope="col">Facilidad de uso</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">React</th>
                <td>Alta</td>
                <td>Media</td>
            </tr>

            <tr>
                <th scope="row">Vue.js</th>
                <td>Media</td>
                <td>Alta</td>
            </tr>

            <tr>
                <th scope="row">Angular</th>
                <td>Media</td>
                <td>Baja</td>
            </tr>
        </tbody>
        </table>

        <table class="tabla">
            <caption>Calendario de eventos</caption>
        <thead>
            <tr>
                <th scope="col">Evento</th>
                <th scope="col">Fecha</th>
                <th scope="col">Ubicación</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">WebConfZaragoza</th>
                <td>12/11/2025</td>
                <td>Zaragoza, España</td>
            </tr>

            <tr>
                <th scope="row">JS Summit Madrid</th>
                <td>25/11/2025</td>
                <td>Madrid, España</td>
            </tr>
        </tbody>
        </table>
    </section>
<?php include "_partials/footer.php"?>