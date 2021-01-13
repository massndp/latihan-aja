 {{-- <!-- Bootstrap core JavaScript-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
 <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{url('js/sb-admin-2.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#pembayaran, #buruha, #buruhb, #buruhc",).keyup(function() {
            var buruha  = $("#buruha").val();
            var buruhb  = $("#buruhb").val();
            var buruhc  = $("#buruhc").val();
            var pembayaran = $("#pembayaran").val();

            var totala = parseInt(buruha)/100 * parseInt(pembayaran);
            $("#totala").val(totala);

            var totalb = parseInt(buruhb)/100 * parseInt(pembayaran);
            $("#totalb").val(totalb);

            var totalc = parseInt(buruhc)/100 * parseInt(pembayaran);
            $("#totalc").val(totalc);
        });
    });
</script>

<script>
    jQuery(document).ready(function($){
        $('#mymodal').on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var modal = $(this);

            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-title').html(button.data("title"));
        });
    });
</script>

<div class="modal" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>
</div>
 