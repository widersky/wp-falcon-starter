<?php get_template_part('parts/base/header'); ?>
<?php get_template_part('parts/subpages/home'); ?>

	<!-- DEMO -->

    <header class="section section--header">
        <div class="container">
            <h1>You just successfully installed WP Falcon Starter! 🦅</h1>
            <h5>This theme includes some helpful things, especially PHP functions, SCSS variables and mixins. Let's take a look at them.</h5>
        </div>
    </header>

    <!-- 1. PHP functions -->
    <section class="section">
        <div class="container">
            <h2>1. PHP functions</h2>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="docs">
                <div class="info info--neutral">
                    <table>
                        <tr>
                            <td><code>showMe($object)</code></td>
                            <td>shows PHP object output in nice format</td>
                        </tr>
                        <tr>
                            <td><code>putIMG($imgID, $sizes)</code></td>
                            <td>(TESTING) Generates responsive-friendly <code class="alt">img</code> tag with srcset attribute (this can drastically improve the speed of your website loading). <code class="alt">$sizes</code> is optional here, but allows you to control precisely how images behave.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- 2. SCSS Mixins -->
    <section class="section">
        <div class="container">
            <h2>2. SCSS Mixins</h2>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="docs">
                <div class="info info--neutral">
                    <table>
                        <tr>
                            <td><code>animate($what, $howLong, $easing)</code></td>
                            <td>makes element animated (all arguments are optional with defaults set to <code class="alt">all, .3s, ease</code>)</td>
                        </tr>
                        <tr>
                            <td><code>square($size)</code></td>
                            <td>makes an square with a side equal to <code class="alt">$size</code></td>
                        </tr>
                        <tr>
                            <td><code>circle($size, $radius)</code></td>
                            <td>makes an circle with a diameter equal to <code class="alt">$size</code>, <code class="alt">$radius</code> is optional here</td>
                        </tr>
                        <tr>
                            <td><code>font-size($size)</code></td>
                            <td>generates font-size attribute based on rem with px fallback for unsupported browsers. <code class="alt">$size</code> is required</td>
                        </tr>
                        <tr>
                            <td><code>hardware($backface, $perspective)</code></td>
                            <td>makes element animations hardware-accelerated to prevent flickering and other bad things (all arguments are optional with defaults set to <code class="alt">true, 1000</code>)</td>
                        </tr>
                        <tr>
                            <td><code>pseudo($display, $position, $content)</code></td>
                            <td>adds usually most needed attributes for <code class="alt">::before</code> and <code class="alt">::after</code> pseudoelements (all arguments are optional with defaults set to <code class="alt">block, absolute, ''</code>)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php // get_sidebar(); ?>
<?php get_template_part('parts/base/footer'); ?>
