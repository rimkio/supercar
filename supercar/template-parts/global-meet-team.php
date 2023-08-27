<div class="o-off-canvas o-off-canvas--meet-the-team js-off-canvas--meet-the-team">
    <div class="o-off-canvas__overlay"></div>
    <a href="#" class="c-off-canvas__close js-meet-the-team__close-menu">
        <div class="c-menu-toggle__inner">
            <span class="c-menu-toggle__line c-menu-toggle__line--short"></span>
            <span class="c-menu-toggle__line c-menu-toggle__line--long"></span>
        </div>
    </a>
    <div class="o-off-canvas__inner-container js-off-canvas__inner">
        <div class="o-team s-foundation-tabs js-team">
            <div class="o-team__top">
                <div class="grid-container full">
                    <div class="grid grid-x align-justify">
                        <div class="cell auto">
                            <h3 class="o-team__heading js-meet-the-team__heading"> MEET THE TEAM </h3>
                        </div>
                        <div class="cell shrink">
                            <div class="o-team__controls show-for-medium js-meet-the-team__controls">
                                <a class="o-team__control o-team__control--prev js-meet-the-team__slider-control-prev js-meet-the-team__prev">
                                    <i class="fal fa-long-arrow-left"></i>
                                </a>
                                <span class="o-team__control-divider"></span>
                                <a class="o-team__control o-team__control--next js-meet-the-team__slider-control-next js-meet-the-team__next">
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="o-team__tabs tabs js-meet-the-team__tabs" id="meet-the-team-tabs" role="tablist">
                <?php
                $department = get_terms(array(
                    'taxonomy' => 'department',
                    'hide_empty' => false
                ));
                if (!empty($department)) {
                    foreach ($department as $key => $item) {
                ?>
                        <li class="o-team__tab tabs-title js-meet-the-team__tab <?= ($key == 0) ? 'is-active' : '' ?>" data-team-department="<?= $item->slug ?>" role="presentation">
                            <a href="#<?= $item->slug ?>" data-tabs-target="<?= $item->slug ?>" aria-selected="true" role="tab" aria-controls="<?= $item->slug ?>" id="<?= $item->slug ?>-label" tabindex="0"><?= $item->name ?></a>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
            <div class="o-team__dropdown js-meet-the-team__dropdown-container s-select-2">
                <select class="js-meet-the-team__dropdown js-select-2 select2-hidden-accessible" data-select2-id="select2-data-1-dynt" tabindex="-1" aria-hidden="true">
                    <?php
                    if (!empty($department)) {
                        foreach ($department as $item) {
                    ?>
                            <option value="<?= $item->slug ?>"> <?= $item->name ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="o-team__panel-container tabs-content js-meet-the-team__grid-container" data-tabs-content="meet-the-team-tabs">
                <?php
                if (!empty($department)) {
                    foreach ($department as $key => $item) {
                ?>
                        <div class="o-team__panel tabs-panel <?= ($key == 0) ? 'is-active' : '' ?>" id="<?= $item->slug ?>" role="tabpanel" aria-labelledby="<?= $item->slug ?>-label">
                            <div class="o-team__team-grid-container js-off-canvas__match-canvas-heights js-inner-scroller" data-scrollbar="true" tabindex="-1">
                                <div class="o-team__team-grid js-profiles-list">
                                    <?php
                                    $list_team = get_posts(
                                        array(
                                            'post_type' => 'team',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'department',
                                                    'field' => 'term_id',
                                                    'terms' => $item->term_id
                                                )
                                            )
                                        )
                                    );
                                    if (!empty($list_team)) {
                                        foreach ($list_team as $team) {
                                            $featured_img_url = get_the_post_thumbnail_url($team->ID, 'full');
                                            $job_title = get_field('job_title', $team->ID);

                                    ?>
                                            <div class="c-team-member c-team-member--listed js-meet-the-team__profile js-tilt" data-team-profile-id="<?= $team->ID ?>">
                                                <div data-id="<?= $team->ID ?>" class="c-team-member__image" style="background-image: url(<?= $featured_img_url ?>)"></div>
                                                <div class="c-team-member__inner">
                                                    <div class="c-team-member__profile">
                                                        <h4 class="c-team-member__name"><?= $team->post_title ?></h4>
                                                        <div class="c-team-member__job-title"><?= $job_title ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="o-team__team-slider js-meet-the-team__team-slider-container">
                <div class="grid-container full">
                    <div class="grid grid-x align-right">
                        <div class="cell shrink">
                            <div class="o-team__controls o-team-controls--mobile show-for-small-only js-meet-the-team__controls">
                                <a class="o-team__control o-team__control--prev js-meet-the-team__slider-control-prev js-meet-the-team__prev">
                                    <i class="fal fa-long-arrow-left"></i>
                                </a>
                                <span class="o-team__control-divider"></span>
                                <a class="o-team__control o-team__control--next js-meet-the-team__slider-control-next js-meet-the-team__next">
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (!empty($department)) {
                    foreach ($department as $key => $item) {
                        $list_team = get_posts(
                            array(
                                'post_type' => 'team',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'department',
                                        'field' => 'term_id',
                                        'terms' => $item->term_id
                                    )
                                )
                            )
                        );
                        if (!empty($list_team)) {
                            foreach ($list_team as $team) {
                                $featured_img_url = get_the_post_thumbnail_url($team->ID, 'full');
                                $job_title = get_field('job_title', $team->ID);
                ?>
                                <div class="c-team-member c-team-member--slide js-meet-the-team__slide js-inner-scroller js-off-canvas__match-canvas-heights" data-team-department="<?= $item->slug ?>" data-team-slide-id="<?= $team->ID ?>" data-scrollbar="true">
                                    <div class="c-team-member__profile" style="background-image: url(<?= $featured_img_url ?>)">
                                        <div class="c-team-member__inner">
                                            <h3 class="c-team-member__name">
                                                <?= $team->post_title ?>
                                            </h3>

                                            <div class="c-team-member__job-title">
                                                <?= $job_title ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-team-member__bio">
                                        <?= $team->post_content ?>
                                    </div>
                                </div>
                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>