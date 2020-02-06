<?php $featuredImage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<button type="button" class="btn btn-link mb-2" data-toggle="modal" data-target="#instagran-stories-modal-<?php echo $post->ID; ?>">Получить изображение для Instagram Stories</button>

<!-- Modal -->
<div class="modal fade" id="instagran-stories-modal-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="instagran-stories-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="instagran-stories-modalLabel">Готовое изображение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center">
      <div id="instagram-stories-<?php echo $post->ID; ?>" class="instagram-stories" style="background-image:url('<?php echo $featuredImage; ?>')">
        <div class="shadow"></div> 
        <?php the_title('<p>', '</p>'); ?>
      </div>
      </div>
      <div class="modal-footer">
      <a class="btn btn-warning" id="inst_stories_generate-<?php echo $post->ID; ?>" href="#">Содать</a>
      </div>
    </div>
  </div>
</div>
    <br/>
            <style>
            .instagram-stories {
                  width: 360px;
                  height: 640px;
                  background-size:cover; 
                  background-position:center; 
                  position: relative;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  transform-origin: top left;
            }
            .instagram-stories .shadow {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  background: rgba(0,0,0,.4)
            }
            .instagram-stories p {
            }
            </style> 
            <script>

            $(document).ready(function(){

              $("#inst_stories_generate-<?php echo $post->ID; ?>").on('click', function () {
                var bigCanvas = $("<div>").appendTo('body'); 
                var scaledElement = $("#instagram-stories-<?php echo $post->ID; ?>").clone()
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