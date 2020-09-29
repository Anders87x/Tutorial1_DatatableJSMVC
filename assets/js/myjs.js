                function letras(e) {

                tecla = (document.all) ? e.keyCode : e.which;

                if (tecla == 8 || tecla == 46) {
                    return true;
                }

                patron = /[A-Z a-z ñÑ Á-Ú á-ú]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
                }

                //////

                function numeros(e) {

                tecla = (document.all) ? e.keyCode : e.which;

                if (tecla == 8 || tecla == 46) {
                    return true;
                }

                patron = /[1234567890+ () ]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);

                }

                //////

                function di(e) {

                tecla = (document.all) ? e.keyCode : e.which;

                if (tecla == 8 || tecla == 46) {
                    return true;
                }

                patron = /[1234567890-]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
                }

                 //////

                function fecha(e) {

                tecla = (document.all) ? e.keyCode : e.which;

                if (tecla == 8 || tecla == 46) {
                    return true;
                }

                patron = /[1234567890]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
                }