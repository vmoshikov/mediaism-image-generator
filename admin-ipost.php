<!-- Генерация квардратного Instagram   -->

<!-- Видимый HTML элемент после include -->
<button type="button" class="btn btn-link mb-2" data-toggle="modal" data-target="#instagran-post-modal-[ID-материала]">Получить квадратное изображение</button>

<!-- Bootstrap 4 Modal -->
<div class="modal fade" id="instagran-post-modal-[ID-материала]" tabindex="-1" role="dialog" aria-labelledby="instagran-post-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="instagran-post-modalLabel">Готовое изображение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center">

      <!-- HTML верстка изобаржения -->
      <div id="instagram-post-[ID-материала]" class="instagram-post" style="background-image:url('[ИЗОБАРЖЕНИЕ]')">
        <div class="shadow"></div> 
        <div class="instagram-post-container">
            [ЗАГОЛОВОК]
        </div>
      </div>
      <!-- /HTML  -->
      </div>
      <div class="modal-footer">
      <a class="btn btn-warning" id="inst_post_generate-[ID-материала]" href="#">Содать</a>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

            <!-- CSS стили для изображения (поддерживаемые элементы: https://html2canvas.hertzen.com/features/) -->
            <style>
              .instagram-post {
                    /* Базовый размер блока */
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

            <!-- JS скрипт обработки HTML -> PNG  -->
            <script>

            $(document).ready(function(){

              $("#inst_post_generate-[ID-материала]").on('click', function () {
                var bigCanvas = $("<div>").appendTo('body'); 
                var scaledElement = $("#instagram-post-[ID-материала]").clone()
                .css({
                  'transform': 'scale(3,3)',
                  'transform-origin': '0 0'
                })
                .appendTo(bigCanvas);

                var oldWidth = scaledElement.width();
                var oldHeight = scaledElement.height();

                // Масштабирование элемента x3 относительно базового размера
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