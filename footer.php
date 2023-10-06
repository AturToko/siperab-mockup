
        <footer class="m-0 mt-3 position-fixed bottom-0 w-100">
          Copyright © 2023 Dinas Bina Marga dan Sumber Daya Air Kabupaten Tangerang
        </footer>
        
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/chart.umd.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $('#tags').select2({
      theme: "bootstrap-5",
      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
      placeholder: $(this).data('placeholder'),
      closeOnSelect: false,
    });
  </script>

</body>

</html>
