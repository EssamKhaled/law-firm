<script>
    jQuery(document).ready(function() {
        $(".paragraph_nav").click(function() {
            var paragraph = $(this).attr('data-url');
            $('#paragraph_content').html('');
            $('#paragraph_content').html('Loading');
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/get_article_part'); ?>",
                data: 'id=<?php echo $article->id; ?>&paragraph=' + paragraph,
                cache: false,
                success: function(res) {
                    $('#paragraph_content').html(res);
                }
            });
        });
    });
</script>
<div style="background-color:#FFF;">
    <div class="scroller" style="height:550px;padding:15px;" data-always-visible="1" data-rail-visible="0">
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
                    <a data-url="<?php echo $ii; ?>" class="btn btn-circle blue paragraph_nav"><?php echo $sub_header[0]; ?></a>
                <?php endif; ?> 
                <?php $ii++; ?>
            <?php endforeach; ?>
        </p>
        <h2><strong><?php echo $article->title; ?></strong></h2>    
        <div id="paragraph_content">
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


