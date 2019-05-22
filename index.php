<?php get_template_part('parts/base/header'); ?>
<?php get_template_part('parts/subpages/home'); ?>

	<!-- DEMO -->

    <header class="section section--header">
        <div class="row">
            <div class="col-100">
                <h1>You just successfully installed WP Starter Theme! 🎉</h1>
                <h5>This theme includes some helpful things, especially PHP functions, SCSS variables and mixins. Let's take a look at them.</h5>
            </div>
        </div>
    </header>

    <!-- 1. PHP functions -->
    <section class="section">
        <div class="row">
            <div class="col-100">
                <h2>1. PHP functions</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-100">
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
        </div>
    </section>


    <!-- 2. SCSS Mixins -->
    <section class="section">
        <div class="row">
            <div class="col-100">
                <h2>2. SCSS Mixins</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-100">
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
        </div>
    </section>


    <div class="line"></div>


    <!-- PERSEUS CSS -->


    <header class="section section--header">
        <div class="row">
            <div class="col-100">
                <h5>This demo below shows included PerseusCSS framework. Feel free to use something else, if you want but... just look at this, isn't it sufficient?</h5>
            </div>
        </div>
    </header>


    <!-- 1. GRID -->
    <section class="section">
        <div class="row">
            <div class="col-100">
                <h2>1. Grid</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-100">
                <div class="docs">
                    <p class="info info--neutral">
                        A row may have a specified width or occupy the full width of a page. In the second case, use a <code>row-full</code> instead of a <code>row</code> class.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--cols">
        <div class="row">
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
            <div class="col-10"><span>10%</span></div>
        </div>
        <div class="row">
            <div class="col-20"><span>20%</span></div>
            <div class="col-20"><span>20%</span></div>
            <div class="col-20"><span>20%</span></div>
            <div class="col-20"><span>20%</span></div>
            <div class="col-20"><span>20%</span></div>
        </div>
        <div class="row">
            <div class="col-25"><span>25%</span></div>
            <div class="col-25"><span>25%</span></div>
            <div class="col-25"><span>25%</span></div>
            <div class="col-25"><span>25%</span></div>
        </div>
        <div class="row">
            <div class="col-33"><span>33%</span></div>
            <div class="col-33"><span>33%</span></div>
            <div class="col-33"><span>33%</span></div>
        </div>
        <div class="row">
            <div class="col-33"><span>33%</span></div>
            <div class="col-66"><span>66%</span></div>
        </div>
        <div class="row">
            <div class="col-50"><span>50%</span></div>
            <div class="col-50"><span>50%</span></div>
        </div>
        <div class="row">
            <div class="col-25"><span>25%</span></div>
            <div class="col-75"><span>75%</span></div>
        </div>
        <div class="row">
            <div class="col-25"><span>25%</span></div>
            <div class="col-50"><span>50%</span></div>
            <div class="col-25"><span>25%</span></div>
        </div>
        <div class="row">
            <div class="col-100"><span>100%</span></div>
        </div>
        <div class="row">
            <div class="col"><span>auto</span></div>
            <div class="col"><span>auto</span></div>
            <div class="col"><span>auto</span></div>
        </div>
    </section>


    <!-- 2. GRID MANIPULATION -->
    <section class="section">
        <div class="row">
            <div class="col-100">
                <h2>2. Grid manipulation</h2>
            </div>
        </div>
    </section>

    <section class="section section--cols">

        <!-- Pull right -->
        <div class="row">
            <div class="col-100">
                <div class="docs">
                    <p class="info info--neutral">
                        Use <code>row--pull-right</code> modifier to stick columns to right side of row.
                    </p>
                </div>
            </div>
        </div>
        <div class="row row--pull-right">
            <div class="col-25"><span>25% pulled right</span></div>
        </div>
        <div class="row row--pull-right">
            <div class="col-50"><span>50% pulled right</span></div>
        </div>

        <!-- Center -->
        <div class="row">
            <div class="col-100">
                <div class="docs">
                    <p class="info info--neutral">
                        Use <code>row--center</code> modifier to center columns inside row.
                    </p>
                </div>
            </div>
        </div>
        <div class="row row--center">
            <div class="col-75"><span>75% centered</span></div>
        </div>
        <div class="row row--center">
            <div class="col-25"><span>First 25% centered</span></div>
            <div class="col-25"><span>Second 25% centered</span></div>
        </div>

        <!-- Space between -->
        <div class="row">
            <div class="col-100">
                <div class="docs">
                    <p class="info info--neutral">
                        Use <code>row--space</code> modifier to make some space between columns inside row.
                    </p>
                </div>
            </div>
        </div>
        <div class="row row--space">
            <div class="col-25"><span>25%</span></div>
            <div class="col-25"><span>25%</span></div>
        </div>
        <div class="row row--space">
            <div class="col-25"><span>25%</span></div>
            <div class="col-40"><span>40%</span></div>
            <div class="col-25"><span>25%</span></div>
        </div>
    </section>


    <!-- 3. INCLUDED LIBS -->
    <section class="section">
        <div class="row">
            <div class="col-100">
                <h2>3. Included libs</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-100">
                <div class="docs">
                    <p class="info info--neutral">
                        There is nice lib in main.js included by default: <a href="https://github.com/pawelgrzybek/siema">Siema slider</a>. For now, just this ;)
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-100">
                <div class="siema">
                    <div class="siema__slide">Siema slide - 1 (drag me!)</div>
                    <div class="siema__slide">Siema slide - 2</div>
                    <div class="siema__slide">Siema slide - 3</div>
                    <div class="siema__slide">Siema slide - 4</div>
                </div>
            </div>
        </div>
    </section>

<?php // get_sidebar(); ?>
<?php get_template_part('parts/base/footer'); ?>
