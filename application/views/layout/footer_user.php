 <!-- Footer-->
 <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=base_url()?>/template2/js/scripts.js"></script>

        <script type="text/javascript">
    function findTotal() {

        var jumlah = document.getElementsByName('jumlah');
        var harga = document.getElementsByName('harga');
        
        var tot = 0;
        var jml = 0;
        var hrg = 0;

        for (var i = 0; i < jumlah.length; i++) {
            if (parseInt(jumlah[i].value))
                jml += parseInt(jumlah[i].value);
        }
        for (var i = 0; i < harga.length; i++) {
            if (parseInt(harga[i].value))
                hrg += parseInt(harga[i].value);
        }
        tot = parseInt(jml) * parseInt(hrg);
        document.getElementById('total').value = tot;
    }
</script>

    </body>
</html>