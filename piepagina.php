</div>
        </div>
        
        <script src="https://kit.fontawesome.com/dfc17848b1.js" crossorigin="anonymous"></script>
        <script>
            let num = 0; 

            setInterval(() => {
                let f =0 ;
                var k =0; 
                const fechaContendor = document.getElementById("fecha");
                /** aqui se acomoda la fecha */ 
                const fechaHoy = new Date(); 
                const dia = fechaHoy.getDate().toString().padStart(2,'0'); 
                const mes = (fechaHoy.getMonth() + 1).toString().padStart(2,'0');
                const anio = fechaHoy.getFullYear().toString();
                const hora = fechaHoy.getHours().toString().padStart(2,'0');
                const minutos = fechaHoy.getMinutes().toString().padStart(2,'0');;
                const fechaTotal = dia + '/' + mes + '/' + anio + ' ' + 
                                   hora + ':' + minutos;  
                       // `${dia}/${mes}/${anio} ${hora}:${minutos}`;
                fechaContendor.innerHTML = fechaTotal; 
            }, 500);    
        </script>
    </body>
</html>