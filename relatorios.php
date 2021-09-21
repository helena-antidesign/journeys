<?php include('includes/header--white.php'); ?>

    <main class="c-relatorios">
       <div class="container-fluid p-0 d-flex position-relative">
            <div class="c-relatorios__bg">
            </div>

            <div class="w-100 d-flex c-relatorios__container">

                <div class="container">

                    <div class="row">

                        <div class="col-xl-5 c-relatorios__container__left">
                            <h2 class="mb-4 fs-2 fw-bold text-secondary">Relatórios</h2>
                            <p class="mb-5 fs-4 text-gray-200 col-xl-8 ">Insira os dados e preencha todos os dados do relatórios basta preencher os campos abaixo.</p>

                            <div class="row">
                                <div class="col-xl-11">
                                    <form class="c-relatorios__container__form border border-dark" action="">
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col-6 border-end border-dark">
                                                <label for="checkin" class="form-label d-block mb-0 text-primary fs-5">Check-In</label>
                                                <input class="border-0 bg-transparent JS__relatorios-checkin" type="text" id="checkin" placeholder="12/02/2021" readonly="readonly">
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <label for="checkout" class="form-label d-block mb-0 text-primary fs-5">Check-Out</label>
                                                    <input class="border-0 bg-transparent JS__relatorios-checkout" type="text" id="checkout" placeholder="14/02/2021" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="destino" class="form-label d-block mb-0 text-primary fs-5">Destino</label>
                                                
                                                <select class="JS__select">
                                                    <option value="">Todas cidades</option>
                                                    <option value="1"> Rio de Janeiro</option>
                                                    <option value="1419">Aarhus</option>
                                                    <option value="1411">Aguas de Lindoia</option>
                                                    <option value="1432">Aguas De Santa Barbara</option>
                                                    <option value="1435">Alexânia</option>
                                                    <option value="1067">Alta Floresta </option>
                                                    <option value="1293">Alter do Chao</option>
                                                    <option value="1415">Alto Paraiso</option>
                                                    <option value="1006">Angra dos Reis  </option>
                                                    <option value="1155">Aparecida</option>
                                                    <option value="1007">Aracaju</option>
                                                    <option value="1319">Aracati</option>
                                                    <option value="1356">Aracruz</option>
                                                    <option value="1190">Araraquara</option>
                                                    <option value="1245">Araxa</option>
                                                    <option value="1152">Arraial D'Ajuda</option>
                                                    <option value="1156">Arraial do Cabo</option>
                                                    <option value="1157">Atibaia</option>
                                                    <option value="1072">Bahia - Chapada Diamantina</option>
                                                    <option value="1010">Balneario de Camboriu </option>
                                                    <option value="1458">Bananal</option>
                                                    <option value="1416">Barra do Pirai</option>
                                                    <option value="1158">Barretos</option>
                                                    <option value="1159">Barueri</option>
                                                    <option value="1160">Bauru</option>
                                                    <option value="1009">Belem</option>
                                                    <option value="1008">Belo Horizonte</option>
                                                    <option value="1425">Belo Jardim</option>
                                                    <option value="1192">Bento Goncalves</option>
                                                    <option value="1184">Bertioga</option>
                                                    <option value="1368">Bilbao</option>
                                                    <option value="1451">Biritiba Mirim</option>
                                                    <option value="1164">Blumenau</option>
                                                    <option value="1454">Bocaina</option>
                                                    <option value="1420">Bom Jardim da Serra</option>
                                                    <option value="1466">Bom Jesus da Lapa</option>
                                                    <option value="1165">Bombinhas</option>
                                                    <option value="1107">Bonito</option>
                                                    <option value="1282">Botucatu</option>
                                                    <option value="1011">Brasilia</option>
                                                    <option value="1465">Brotas</option>
                                                    <option value="1357">Brusque</option>
                                                    <option value="1473">Bueno Brandao</option>
                                                    <option value="2">Buzios</option>
                                                    <option value="1347">Buzios. </option>
                                                    <option value="1074">Cabo de Santo Agostinho </option>
                                                    <option value="1033">Cabo Frio  </option>
                                                    <option value="1434">Caete</option>
                                                    <option value="1438">Cairu</option>
                                                    <option value="1446">Cajueiro Da Praia</option>
                                                    <option value="1429">Caldas</option>
                                                    <option value="1193">Caldas Novas</option>
                                                    <option value="1403">Camaçari</option>
                                                    <option value="1421">Cambara do Sul </option>
                                                    <option value="1379">Camocim</option>
                                                    <option value="1194">Campina Grande</option>
                                                    <option value="1249">Campina Grande do Sul</option>
                                                    <option value="1013">Campinas</option>
                                                    <option value="1039">Campo Grande </option>
                                                    <option value="1195">Campos do Jordão</option>
                                                    <option value="1196">Campos dos Goytacazes</option>
                                                    <option value="1124">Cancun</option>
                                                    <option value="1188">Canela</option>
                                                    <option value="1167">Canoas</option>
                                                    <option value="1362">Capao da Canoa</option>
                                                    <option value="1474">Capim Branco</option>
                                                    <option value="1391">Capitolio</option>
                                                    <option value="1131">Caracas</option>
                                                    <option value="1183">Caraguatatuba</option>
                                                    <option value="1447">Caraíva</option>
                                                    <option value="1470">Carandaí</option>
                                                    <option value="1341">Cariacica</option>
                                                    <option value="1264">Cascavel</option>
                                                    <option value="1344">Caucaia</option>
                                                    <option value="1197">Caxias do Sul</option>
                                                    <option value="1410">Cesario Lange</option>
                                                    <option value="1265">Chapada Dos Guimarães</option>
                                                    <option value="1283">Chapeco</option>
                                                    <option value="1393">Chui</option>
                                                    <option value="1284">Confins</option>
                                                    <option value="1468">Congonhas</option>
                                                    <option value="1318">Conselheiro Lafaiete</option>
                                                    <option value="1154">Costa do Sauipe</option>
                                                    <option value="1285">Criciúma</option>
                                                    <option value="1331">Cruz</option>
                                                    <option value="1031">Cuiaba</option>
                                                    <option value="1014">Curitiba</option>
                                                    <option value="1457">Dom Macedo Costa</option>
                                                    <option value="1430">Domingos Martins</option>
                                                    <option value="1350">Duque De Caxias</option>
                                                    <option value="1073">Eco - Aventura </option>
                                                    <option value="1464">Engenheiro Paulo de Frontin</option>
                                                    <option value="1428">Entre Rios</option>
                                                    <option value="1476">Esmeraldas</option>
                                                    <option value="1355">Feira de Santada</option>
                                                    <option value="1423">Fernandes Pinheiro</option>
                                                    <option value="1063">Fernando de Noronha </option>
                                                    <option value="1477">Floresta</option>
                                                    <option value="1015">Florianopolis</option>
                                                    <option value="1002">Fortaleza</option>
                                                    <option value="1038">Fortaleza - Aquiraz</option>
                                                    <option value="1161">Fortaleza - Beberibe</option>
                                                    <option value="1087">Fortaleza - Canoa Quebrada</option>
                                                    <option value="1053">Fortaleza - Cumbuco</option>
                                                    <option value="1295">Fortaleza - Fortim</option>
                                                    <option value="1335">Fortaleza - Taiba</option>
                                                    <option value="1016">Fortaleza - Trairi</option>
                                                    <option value="1041">Foz do Iguacu</option>
                                                    <option value="1269">Franca</option>
                                                    <option value="1279">Garopaba</option>
                                                    <option value="1381">Gent</option>
                                                    <option value="1361">Goianesia</option>
                                                    <option value="1198">Goiania</option>
                                                    <option value="1439">Governador Celso Ramos</option>
                                                    <option value="1026">Gramado</option>
                                                    <option value="1461">Gravatá</option>
                                                    <option value="1199">Gravataí</option>
                                                    <option value="1281">Gravatal</option>
                                                    <option value="1405">Greenacres</option>
                                                    <option value="1448">Guadalajara </option>
                                                    <option value="1280">Guarapari</option>
                                                    <option value="1352">Guarapuava</option>
                                                    <option value="1250">Guararema</option>
                                                    <option value="1360">Guaratingueta</option>
                                                    <option value="1291">Guaratuba</option>
                                                    <option value="1058">Guaruja </option>
                                                    <option value="1472">Igarape</option>
                                                    <option value="1034">Ilha Grande </option>
                                                    <option value="1042">Ilhabela</option>
                                                    <option value="1044">Ilheus </option>
                                                    <option value="1266">Ilheus - Ilha de Comandatuba</option>
                                                    <option value="1045">Ilheus - Una </option>
                                                    <option value="1166">Imbassai</option>
                                                    <option value="1252">Imbituba</option>
                                                    <option value="1200">Indaiatuba</option>
                                                    <option value="1278">Ipatinga</option>
                                                    <option value="1342">Iretama</option>
                                                    <option value="1277">Ita</option>
                                                    <option value="1017">Itacare</option>
                                                    <option value="1290">Itacimirim</option>
                                                    <option value="1337">Itaguai</option>
                                                    <option value="1392">Itaipava</option>
                                                    <option value="1201">Itajai</option>
                                                    <option value="1396">Itajuba</option>
                                                    <option value="1202">Itapema</option>
                                                    <option value="1417">Itapira</option>
                                                    <option value="1389">Itatiaia</option>
                                                    <option value="1303">Itu</option>
                                                    <option value="1203">Itupeva</option>
                                                    <option value="1317">Jaboticatubas</option>
                                                    <option value="1456">Jacareí</option>
                                                    <option value="1326">Jaguariuna</option>
                                                    <option value="1204">Jaragua do Sul</option>
                                                    <option value="1066">Jericoacoara</option>
                                                    <option value="1018">Joao Pessoa</option>
                                                    <option value="1035">Joao Pessoa - Conde</option>
                                                    <option value="1205">Joinville</option>
                                                    <option value="1426">Juazeiro</option>
                                                    <option value="1206">Juazeiro do Norte</option>
                                                    <option value="1275">Juiz de Fora</option>
                                                    <option value="1207">Jundiai</option>
                                                    <option value="1068">Jungle Lodges &amp; Cruises</option>
                                                    <option value="1354">La Plata</option>
                                                    <option value="1462">Lages</option>
                                                    <option value="1208">Lagoa Santa</option>
                                                    <option value="1071">Lençois Maranhenses</option>
                                                    <option value="1120">Lima</option>
                                                    <option value="1273">Lins</option>
                                                    <option value="1211">Londrina</option>
                                                    <option value="1334">Los Angeles </option>
                                                    <option value="1212">Macae</option>
                                                    <option value="1213">Macapa</option>
                                                    <option value="1021">Maceio</option>
                                                    <option value="1051">Maceio - Barra de Sao Miguel</option>
                                                    <option value="1306">Maceio - Japaratinga</option>
                                                    <option value="1226">Maceio - Praia do Frances</option>
                                                    <option value="1088">Maceio - Sao Miguel dos Milagres</option>
                                                    <option value="1424">Mairipora</option>
                                                    <option value="1377">Manacapuru</option>
                                                    <option value="1040">Manaus </option>
                                                    <option value="1214">Mangaratiba</option>
                                                    <option value="1043">Maragogi </option>
                                                    <option value="1055">Marau </option>
                                                    <option value="1216">Maringa</option>
                                                    <option value="1460">Massaranduba</option>
                                                    <option value="1382">Mata de São João</option>
                                                    <option value="1353">Medellin</option>
                                                    <option value="1297">Mérida</option>
                                                    <option value="1444">Miguel Pereira</option>
                                                    <option value="1453">Miranda</option>
                                                    <option value="1270">Mogi das Cruzes</option>
                                                    <option value="1349">Mogi Guaçu</option>
                                                    <option value="1271">Monte Claros</option>
                                                    <option value="1475">Monte Siao</option>
                                                    <option value="1412">Monte Verde</option>
                                                    <option value="1065">Morro de Sao Paulo </option>
                                                    <option value="1064">Morro de Sao Paulo - Boipeba</option>
                                                    <option value="1146">Moscou</option>
                                                    <option value="1020">Natal</option>
                                                    <option value="1057">Natal - Praia de Camurupim</option>
                                                    <option value="1150">Natal - Sao Miguel do Gostoso</option>
                                                    <option value="1181">Natal - Touros</option>
                                                    <option value="1217">Niteroi</option>
                                                    <option value="1422">Nobres</option>
                                                    <option value="1371">Northampton</option>
                                                    <option value="1272">Nova Friburgo</option>
                                                    <option value="1173">Nova Lima</option>
                                                    <option value="1218">Novo Hamburgo</option>
                                                    <option value="1219">Osasco</option>
                                                    <option value="1406">Osório</option>
                                                    <option value="1471">Ouro Fino</option>
                                                    <option value="1036">Ouro Preto </option>
                                                    <option value="1248">Palhoça</option>
                                                    <option value="1332">Palmas</option>
                                                    <option value="1069">Pantanal  - Norte </option>
                                                    <option value="1070">Pantanal - Sur</option>
                                                    <option value="1408">Paracatu</option>
                                                    <option value="1220">Paragominas</option>
                                                    <option value="1452">Paraiba Do Sul</option>
                                                    <option value="1003">Paraty</option>
                                                    <option value="1324">Parnaíba</option>
                                                    <option value="1437">Penedo</option>
                                                    <option value="1221">Penha</option>
                                                    <option value="1253">Petrolina</option>
                                                    <option value="1222">Petropolis</option>
                                                    <option value="1445">Piauí</option>
                                                    <option value="1037">Pipa</option>
                                                    <option value="1223">Piracicaba</option>
                                                    <option value="1463">Piraju</option>
                                                    <option value="1311">Pirassununga</option>
                                                    <option value="1246">Piratuba</option>
                                                    <option value="1224">Pirenópolis</option>
                                                    <option value="1440">Pitimbu</option>
                                                    <option value="1225">Poços de Caldas</option>
                                                    <option value="1022">Porto Alegre</option>
                                                    <option value="1267">Porto belo</option>
                                                    <option value="1004">Porto de Galinhas </option>
                                                    <option value="1333">Porto Feliz</option>
                                                    <option value="1032">Porto Seguro </option>
                                                    <option value="1056">Prado</option>
                                                    <option value="1153">Praia do Forte</option>
                                                    <option value="1185">Praia Grande</option>
                                                    <option value="1325">Puerto Iguazu (ARG)</option>
                                                    <option value="1023">Recife</option>
                                                    <option value="1046">Recife - Olinda</option>
                                                    <option value="1388">Resende</option>
                                                    <option value="1433">Ribeirão Claro</option>
                                                    <option value="1186">Ribeirao Preto</option>
                                                    <option value="1449">Rio Branco</option>
                                                    <option value="1268">Rio das Ostras</option>
                                                    <option value="1329">Rio Grande</option>
                                                    <option value="1180">Rio Quente</option>
                                                    <option value="1327">Rio Verde</option>
                                                    <option value="1300">Riviera Maya</option>
                                                    <option value="1227">Rondonópolis</option>
                                                    <option value="1024">Salvador</option>
                                                    <option value="1346">Salvador - Baixio</option>
                                                    <option value="1209">Salvador - Lauro de Freitas</option>
                                                    <option value="1149">Santa Cruz De Cabralia </option>
                                                    <option value="1298">Santa Cruz de la Sierra</option>
                                                    <option value="1363">Santa Cruz de Tenerife</option>
                                                    <option value="1177">Santa Cruz Do Sul</option>
                                                    <option value="1228">Santo Amaro da Imperatriz</option>
                                                    <option value="1061">Santo Andre </option>
                                                    <option value="1409">Santo Antonio do Pinhal</option>
                                                    <option value="1030">Santos </option>
                                                    <option value="1274">Sao Bento do Sul</option>
                                                    <option value="1059">Sao Bernardo do Campo</option>
                                                    <option value="1060">Sao Caetano do Sul </option>
                                                    <option value="1229">Sao Carlos</option>
                                                    <option value="1431">São Francisco de Paula</option>
                                                    <option value="1276">Sao Francisco do Sul</option>
                                                    <option value="1436">São Gonçalo Do Amarante</option>
                                                    <option value="1230">Sao José do Rio Preto</option>
                                                    <option value="1062">Sao Jose dos Campos </option>
                                                    <option value="1231">Sao Jose dos Pinhais</option>
                                                    <option value="1232">Sao Leopoldo</option>
                                                    <option value="1469">São Lourenço</option>
                                                    <option value="1169">Sao Luis do Maranhão</option>
                                                    <option value="1005">Sao Paulo</option>
                                                    <option value="1012">Sao Paulo - Guarulhos  </option>
                                                    <option value="1259">Sao Paulo - Olimpia</option>
                                                    <option value="1139">Sao Pedro da Aldeia</option>
                                                    <option value="1234">Sao Sebastião</option>
                                                    <option value="1390">Saquarema</option>
                                                    <option value="1450">Senhor do Bonfim</option>
                                                    <option value="1320">Serra Negra</option>
                                                    <option value="1316">Sete Lagoas</option>
                                                    <option value="1235">Sobral</option>
                                                    <option value="1459">Socorro</option>
                                                    <option value="1178">Sorocaba</option>
                                                    <option value="1047">Tamandare</option>
                                                    <option value="1236">Taubate</option>
                                                    <option value="1330">TEGUCIGALPA</option>
                                                    <option value="1369">Temara</option>
                                                    <option value="1323">Tenerife</option>
                                                    <option value="1258">Teresina</option>
                                                    <option value="1179">Teresopolis</option>
                                                    <option value="1427">Tianguá</option>
                                                    <option value="1172">Tibau do Sul</option>
                                                    <option value="1339">Timbo</option>
                                                    <option value="1237">Tiradentes</option>
                                                    <option value="1238">Torres</option>
                                                    <option value="1027">Trancoso</option>
                                                    <option value="1102">Trancoso - Espelho</option>
                                                    <option value="1028">Trancoso - Ponta do Corumbau</option>
                                                    <option value="1336">Tres Lagoas</option>
                                                    <option value="1256">Tres Rios</option>
                                                    <option value="1182">Ubatuba</option>
                                                    <option value="1239">Uberaba</option>
                                                    <option value="1240">Uberlandia</option>
                                                    <option value="1455">Valença</option>
                                                    <option value="1313">Valinhos</option>
                                                    <option value="1288">Valparaiso</option>
                                                    <option value="1189">Varzea Grande</option>
                                                    <option value="1387">Vassouras</option>
                                                    <option value="1367">Vienna</option>
                                                    <option value="1241">Vila Velha</option>
                                                    <option value="1441">Virginia</option>
                                                    <option value="1242">Vitoria</option>
                                                    <option value="1467">Vitoria da Conquista</option>
                                                    <option value="1314">Volta Redonda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="hotel" class="form-label d-block mb-0 text-primary fs-5">Hotel</label>
                                                <select name="" id="hotel" class="JS__select">
                                                    <option value="">Todos Hotéis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="empresa" class="form-label d-block mb-0 text-primary fs-5">Empresa</label>
                                                
                                                <select class="JS__select" id="empresa">
                                                    <option value="3">JOURNEYS NACIONAL SPECIAL TRAVEL DMC BRASIL</option>
                                                    <option value="2">JOURNEYS SPECIAL TRAVEL & MORE</option>
                                                    <option value="1">NANO ONLINE INTERNACIONAL</option>
                                                    <option value="4">NANO ONLINE NACIONAL</option>
                                                    <option value="5">TOURPLANS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="fornecedor" class="form-label d-block mb-0 text-primary fs-5">Fornecedor</label>
                                                <select name="" id="fornecedor" class="JS__select">
                                                    <option value="">Todos Fornecedores</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark pt-3">
                                            <div class="col-6 border-end border-dark">
                                                <label for="num-file" class="form-label d-block mb-0 text-primary fs-5">Número do file</label>
                                                <input class="border-0 bg-transparent" type="text" id="num-file" placeholder="656556">
                                            </div>
                                            <div class="col-6">
                                                <label for="nome-servico" class="form-label d-block mb-0 text-primary fs-5">Nome do serviço</label>
                                                <input class="border-0 bg-transparent" type="text" id="nome-servico" placeholder="Operação extra">
                                            </div>
                                        </div>
                                        <div class="row pt-5">
                                            <div class="col">
                                                <button class="btn btn-primary px-5 rounded-pill fw-500 me-3 w-100 fs-5">Gerar relatório</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 offset-xl-1 c-relatorios__container__result">

                            <h2 class="fs-2 fw-bold text-secondary mb-5 ">Todos os relatórios</h2>

                            <div class="row">
                                <table class="table pt-4 " id="table">
                                    <thead class="fs-12">
                                        <tr class="text-secondary">
                                            <th scope="col" class="fw-500"> 
                                                <div class="d-inline-flex align-items-center">
                                                    <span class="icon-calendar text-primary fs-22 me-3"></span>
                                                    Data de Envio
                                                </div>
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <div class="d-inline-flex align-items-center">
                                                    <span class="icon-category text-primary fs-22 me-3"></span>
                                                    Categoria
                                                </div>
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <div class="d-inline-flex align-items-center">
                                                    <span class="icon-entrada-saida text-primary fs-22 me-3"></span>
                                                    Entrada/Saída
                                                </div>
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <div class="d-inline-flex align-items-center">
                                                    <span class="icon-download text-primary fs-22 me-3"></span>
                                                    De
                                                </div>
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <div class="d-inline-flex align-items-center">
                                                    <span class="icon-download text-primary fs-22 me-3 rotate-180"></span>
                                                    Para
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6">
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr onclick="window.open('relatorio.pdf')">
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
       </div>
    </main>

    <?php include('includes/footer.php'); ?>


    <script>
        flatpickr(".JS__relatorios-checkin", {
            locale: 'pt',
            dateFormat: 'd/m/Y',
            // inline: true, 
            monthSelectorType: 'static',
            "plugins": [new rangePlugin({ input: ".JS__relatorios-checkout"})]
        });
    </script>