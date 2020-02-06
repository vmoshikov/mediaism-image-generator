<?php $featuredImage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<button type="button" class="btn btn-link mb-2" data-toggle="modal" data-target="#instagran-post-modal-<?php echo $post->ID; ?>">Получить квадратное изображение</button>

<!-- Modal -->
<div class="modal fade" id="instagran-post-modal-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="instagran-post-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="instagran-post-modalLabel">Готовое изображение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center">
      <div id="instagram-post-<?php echo $post->ID; ?>" class="instagram-post" style="background-image:url('<?php echo $featuredImage; ?>')">
        <div class="shadow"></div> 
        <div class="instagram-post-container">
            <?php the_title('<p>', '</p>'); ?>
        </div>
      </div>
      </div>
      <div class="modal-footer">
      <a class="btn btn-warning" id="inst_post_generate-<?php echo $post->ID; ?>" href="#">Содать</a>
      </div>
    </div>
  </div>
</div>
    <br/>
            <style>
            .instagram-post {
                  width: 400px;
                  height: 400px;
                  background-size:cover; 
                  background-position:center; 
                  position: relative;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  transform-origin: top left;
            }
            .instagram-post .shadow {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  background: rgba(0,0,0,.4)
            }
            .instagram-post  .instagram-post-container {

            }
            .instagram-post p {
                  display: inline;
                  
            }
            </style> 
            <script>

$(document).ready(function(){

  $("#inst_post_generate-<?php echo $post->ID; ?>").on('click', function () {
    var bigCanvas = $("<div>").appendTo('body'); 
    var scaledElement = $("#instagram-post-<?php echo $post->ID; ?>").clone()
    .css({
      'transform': 'scale(3,3)',
      'transform-origin': '0 0'
    })
    .appendTo(bigCanvas);

    var oldWidth = scaledElement.width();
    var oldHeight = scaledElement.height();

    var newWidth = oldWidth * 3;
    var newHeight = oldHeight * 3;

    bigCanvas.css({
      'width': newWidth,
      'height': newHeight
    })

    html2canvas(bigCanvas, {
      onrendered: function(canvas) {
        var w=window.open();
        w.document.write("<img width='"+oldWidth+"' height='"+oldHeight+"' src='"+canvas.toDataURL()+"' />");
        w.print();
        bigCanvas.remove() 
      }
    });

  });

});

</script>