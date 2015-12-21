<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $(".paragraph_nav").click(function() {
            var paragraph = $(this).attr('data-url');
            $('#paragraph_content').html('');
            $('#paragraph_content').html('Loading');
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('library/get_article_part'); ?>",
                data: 'id=<?php echo $article->id; ?>&paragraph=' + paragraph,
                cache: false,
                success: function(res) {
                    $('#paragraph_content').html(res);
                }
            });
        });
    });
</script>
<div class="container">

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-3 col-sm-6">
            <ul class="list-group margin-bottom-25 sidebar-menu margin-top-20">
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Category 1</a></li>
                <li class="list-group-item clearfix dropdown">
                    <a href="javascript:void(0);" class="">
                        <i class="fa fa-angle-right"></i>
                        Category 2
                    </a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li class="list-group-item dropdown clearfix active">
                            <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                            <ul class="dropdown-menu" style="display:block;">
                                <li class="list-group-item dropdown clearfix">
                                    <a href="javascript:void(0);"><i class="fa fa-angle-right"></i> Classic </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-group-item dropdown clearfix active">
                                    <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                                    <ul class="dropdown-menu" style="display:block;">
                                        <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
                    </ul>
                </li>
            </ul>            
        </div>
        <div class="col-md-7 col-sm-8" >
            <div style="background-color:#FFF;">
                <div class="scroller" style="height:150px;padding:15px;" data-always-visible="1" data-rail-visible="0">
                    <?php
                    $paragraphs = explode('<hr />', $article->content);
                    $paragraphs_count = count($paragraphs);
                    $ii = 0;
                    ?>
                    <p>
                        <?php foreach ($paragraphs as $paragraph) : ?>
                            <?php $sub_header = explode('<h3>', $paragraph); ?>
                            <?php if (isset($sub_header[1])): ?>
                                <?php $sub_header = explode('</h3>', $sub_header[1]); ?>
                                <a data-url="<?php echo $ii; ?>" style="margin-bottom: 10px;" class="btn btn-primary paragraph_nav"><?php echo $sub_header[0]; ?></a>
                            <?php endif; ?> 
                            <?php $ii++; ?>
                        <?php endforeach; ?>
                    </p>
                    <h2><strong><?php echo $article->title; ?></strong></h2>    
                    <div id="paragraph_content" style="height:150px;">
                        <?php echo $paragraphs[0]; ?>
                    </div>

                </div> 
                <div class="btn-group pull-right">
                    <a data-url="0" class="btn btn-default paragraph_nav"><i class='fa fa-step-backward'></i></a>
                    <?php for ($i = 0; $i < $paragraphs_count; $i++) : ?>
                        <a data-url="<?php echo $i; ?>" class="btn btn-default paragraph_nav"><?php echo $i + 1; ?></a>
                    <?php endfor; ?>
                    <a data-url="<?php echo ($paragraphs_count - 1); ?>" class="btn btn-default paragraph_nav"><i class='fa fa-step-forward'></i></a>            
                </div>    
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <img src="http://pagead2.googlesyndication.com/simgad/15014435257038187581" class="responsive" style="width: 100%;margin-top: 20px;" />
        </div>
    </div>
    <!-- END SIDEBAR & CONTENT -->
</div>


