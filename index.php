<?php get_template_part('parts/base/header'); ?>

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
                    <p class="info info--neutral">
                        <code>showMe($object)</code> - shows PHP object output in nice format <br>
                        <code>putIMG($imgID)</code> - generates responsive friendly img markup with srcset value (this may speed up your site drastically!) <br>
                    </p>
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
                    <div class="siema__slide">Siema slide - 1</div>
                    <div class="siema__slide">Siema slide - 2</div>
                    <div class="siema__slide">Siema slide - 3</div>
                    <div class="siema__slide">Siema slide - 4</div>
                </div>
            </div>
        </div>
    </section>

<?php // get_sidebar(); ?>
<?php get_template_part('parts/base/footer'); ?>
