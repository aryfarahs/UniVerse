<form class="formFaculRides" name="nonce" action="atvComp.php" method="post">
                <div class="sem_nome">
                    <table class="atvBox">
                        <thead>
                            <tr class="atvHeader">
                                <td><h4>Nome</h4></td>
                                <td><h4>Grupo</h4></td>
                                <td><h4>Tipo</h4></td>
                                <td><h4>Horas</h4></td>
                                <td><h4></h4></td>
                            </tr>
                        </thead>
                        
                        <tr class="atv">
                            <!-- ID INT PRIMARY KEY AUTO INCREMENT -->
                            <td><input type="text" class="input_atv" name="nomeatv" required></td>
                            <td><input type="text" class="input_atv" name="grupoatv" required></td>
                            <td><input type="text" class="input_atv" name="tipoatv" required></td>
                            <td><input type="number" class="input_atv" name="horasatv" required></td>
                        </tr>


                        <tfoot>
                            <tr class="atvFooter">
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>

                    <table class="atvBoxComp">
                        <thead>
                            <tr class="atvHeader">
                                <td><h4>Comprovante</h4></td>
                            </tr>
                        </thead>

                        <tr class="atv">
                            <td><input type="file"></td>
                        </tr>

                        <tfoot>
                            <tr class="atvFooter">
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                  <button class="atvSubmit" type="submit" name="atvSub" id="idatvSub">Enviar</button>  

                

                   
                
            </form>