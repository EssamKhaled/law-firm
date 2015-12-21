<div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-2 col-sm-2">
            <img src="http://pagead2.googlesyndication.com/simgad/9935985462421392984" class="responsive" style="width: 100%;margin-top: 20px;" />
        </div>
        <div class="col-md-8 col-sm-8">
            <p style="margin-top: 20px;"></p>
            <?php foreach($articles as $article) : ?>
                <div class="search-result-item">
                    <h4><a href="<?php echo site_url('library/article/' . $article->id); ?>"><?php echo ucfirst($article->title); ?></a></h4>
                    <p><?php echo trim(strip_tags(word_limiter($article->content, 35))); ?></p>
                    <a class="search-link" style="color: #089947;" href="<?php echo site_url('library/article/' . $article->id); ?>"><?php echo site_url('library/article/' . $article->id); ?></a>
                </div>
            <?php endforeach; ?>
            <div class="pull-right"><?php echo $links; ?></div>
        </div>
        <div class="col-md-2 col-sm-2">
            <img src="http://pagead2.googlesyndication.com/simgad/15014435257038187581" class="responsive" style="width: 100%;margin-top: 20px;" />
        </div>
    </div>
    
    <!-- END SIDEBAR & CONTENT -->
</div>