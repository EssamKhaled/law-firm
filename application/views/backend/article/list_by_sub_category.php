
<a href="<?php echo site_url('admin/article/add'); ?>" style="margin-bottom: 10px" class="btn default btn-sm blue"><i class="fa fa-plus"></i> Add Article </a>
<a href="<?php echo site_url('admin/article'); ?>" style="margin-bottom: 10px" class="btn default btn-sm blue"><i class="fa fa-files-o"></i> All Articles </a>
<div style="background-color: #FFF;">    
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($articles as $article) : ?>
                <tr>
                    <td><?php echo $article->id; ?></td>
                    <td><?php echo $article->title; ?></td>
                    <td><?php echo strip_tags(word_limiter($article->content, 10)); ?></td>
                    <td style="width: 21%;">
                        <a href="<?php echo site_url('admin/article_view/' . $article->id); ?>" class="btn default btn-sm blue"><i class="fa fa-file"></i> View </a>
                        <a href="<?php echo site_url('admin/article/edit/' . $article->id); ?>" class="btn default btn-sm blue"><i class="fa fa-pencil"></i> Edit </a>
                        <a href="<?php echo site_url('admin/delete_article/' . $article->id . '/' . $this->uri->segment(3)); ?>" class="btn default btn-sm blue"><i class="fa fa-remove"></i> Delete </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>