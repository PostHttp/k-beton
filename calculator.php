<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <meta charset="utf-8">
  <title>Калькулятор бетона</title>
  <script src="calc/calculation.js"></script>
</head>
<body>
  
  <div class="container-fluid">
    <!--Менб навигации-->
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>
            <small>Компания</small> К-Бетон
          </h1>
        </div>
        <nav class="navbar navbar-default" role="navigation">
          <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Компания</a></li>
              <li class="active"><a href="calculator.php">Онлайн калькулятор</a></li>
              <li><a href="solutions.php">Решения</a></li>
              <li><a href="certificates.php">Сертификаты</a></li>
              <li><a href="contacts.php">Контакты</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!--Контент-->
    <div class="row">
      <div class="col-md-12">

        <!--Форма-->
        <form class="form-group">
          <!--Входные данные-->
          <div class="container">
            <div class="form-inline">

              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <!--Входные данные - блок 1-->
                    <div class="form-group">
                      <h3>Данные для замеса</h3>

                      <!--Объем бетона-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="inputVBeton">Объем бетона</label>
                          </div>
                          <div class="col-lg-3">
                            <div class="input-group">
                              <input type="text" class="form-control" id="inputVBeton" value="1" readonly="readonly">
                              <div class="input-group-addon">м<sup>3</sup></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--Марка бетона-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="selectMBetona">Марка (класс) бетона</label>
                          </div>
                          <div class="col-lg-3">
                            <select type="text" class="form-control" id="selectMBetona">
                              <option value="100">M100 | B7,5</option>
                              <option value="150">M150 | B10</option>
                              <option value="150">M150 | B12,5</option>
                              <option selected value="200">M200 | B15</option>
                              <option value="250">M250 | B20</option>
                              <option value="300">M300 | B22,5</option>
                              <option value="350">M350 | B25</option>
                              <option value="350">M350 | B26,5</option>
                              <option value="400">M400 | B30</option>
                              <option value="450">M450 | B35</option>
                              <option value="550">M550 | B40</option>
                              <option value="600">M600 | B45</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <!--Подвижность смеси-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="selectPodSmesi">Подвижность смеси</label>
                          </div>
                          <div class="col-lg-3">
                            <select type="text" class="form-control" id="selectPGSmesi">
                              <option value="0">Ж</option>
                              <option selected value="1">П</option>
                            </select>
                            <label for="selectNSmesi">-</label>
                            <select type="text" class="form-control" id="selectNSmesi">
                              <option value="0">1</option>
                              <option value="1">2</option>
                              <option selected value="2">3</option>
                              <option value="3">4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <!--Входные данные - блок 2-->
                    <div class="form-group">
                      <h3>Исходные данные</h3>

                      <!--Бетономешалка-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="inputBetonomeshalks">Бетономешалка</label>
                          </div>
                          <div class="col-lg-3">
                            <div class="input-group">
                              <input type="text" class="form-control" id="inputBetonomeshalks" value="180" readonly="readonly">
                              <div class="input-group-addon">л</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--Марка цемента-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="selectMCement">Марка цемента</label>
                          </div>
                          <div class="col-lg-3">
                            <select type="text" class="form-control" id="selectMCement">
                              <option value="300">M300</option>
                              <option selected value="400">M400</option>
                              <option value="500">M500</option>
                              <option value="600">M600</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <!--Мелкий заполнитель-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="selectSmallFiller">Мелкий заполнитель</label>
                          </div>
                          <div class="col-lg-3">
                            <div class="input-group">
                              <select type="text" class="form-control" id="selectSmallFiller">
                                <option value="0">Мелкий | &lt; 1,8</option>
                                <option selected value="1">Средний | 2-2,5</option>
                                <option value="2">Крупный | &gt; 2,5</option>
                              </select>
                              <div class="input-group-addon">мм</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--Крупный заполнитель-->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-2">
                            <label for="selectBigFillerType">Крупный заполнитель</label>
                          </div>
                          <div class="col-lg-3">
                            <select type="text" class="form-control" id="selectBigFillerType">
                              <option value="0">Гравий</option>
                              <option selected value="1">Щебень</option>
                            </select>
                            <label for="selectBigFillerValue">-</label>
                            <div class="input-group">
                              <select type="text" class="form-control" id="selectBigFillerValue">
                                <option value="0">10</option>
                                <option selected value="1">20</option>
                                <option value="2">40</option>
                                <option value="3">70</option>
                              </select>
                              <div class="input-group-addon">мм</div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          

            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-centered">
                  <button type="button" class="btn btn-success" onclick="mainCalcFunc()">Расчитать</button>
                </div>
              </div>
            </div>


            <!--Результирующие данные-->
            <div class="container">
              <div class="form-inline">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-6">
                      <!--Результирующие данные - блок 1-->
                      <div class="form-group">
                        <h3>Состав бетона (кг)</h3>

                        <!--Вода--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Voda_KG">Вода</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Voda_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Цемент--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Cement_KG">Цемент</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Cement_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Щебень--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Sheben_KG">Щебень</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Sheben_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Песок--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Pesok_KG">Песок</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Pesok_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--ВодоЦемент--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_VodoCement_KG">Водоцемент</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control" id="output_VodoCement_KG" value="" readonly="readonly">
                            </div>
                          </div>
                        </div>

                        <!--Плотность бетонной смеси--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_PBetonSmesi_KG">Плотность бетонной смеси</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_PBetonSmesi_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Соотношение Ц:П:Щ--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_SootnoshenieCement_KG">Соотношение Ц:П:Щ</label>
                            </div>
                            <div class="col-lg-4">
                              <div class="input-group" id="a1">
                                <input type="text" class="form-control" id="output_SootnoshenieCement_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>

                              <label for="output_SootnosheniePesok_KG">:</label>
                              <div class="input-group" id="a2">
                                <input type="text" class="form-control" id="output_SootnosheniePesok_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>

                              <label for="output_SootnoshenieSheben_KG">:</label>
                              <div class="input-group" id="a3">
                                <input type="text" class="form-control" id="output_SootnoshenieSheben_KG" value="" readonly="readonly">
                                <div class="input-group-addon">кг</div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="col-lg-6">
                      <!--Результирующие данные - блок 2-->
                      <div class="form-group">
                        <h3>Состав бетона (л)</h3>

                        <!--Вода--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Voda_L">Вода</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Voda_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Цемент--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Cement_L">Цемент</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Cement_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Щебень--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Sheben_L">Щебень</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Sheben_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Песок--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_Pesok_L">Песок</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_Pesok_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--ВодоЦемент--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_VodoCement_L">Водоцемент</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control" id="output_VodoCement_L" value="" readonly="readonly">
                            </div>
                          </div>
                        </div>

                        <!--Плотность бетонной смеси--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_PBetonSmesi_L">Плотность бетонной смеси</label>
                            </div>
                            <div class="col-lg-3">
                              <div class="input-group">
                                <input type="text" class="form-control" id="output_PBetonSmesi_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--Соотношение Ц:П:Щ--> 
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-2">
                              <label for="output_SootnoshenieCement_L">Соотношение Ц:П:Щ</label>
                            </div>
                            <div class="col-lg-4">
                              <div class="input-group" id="a1">
                                <input type="text" class="form-control" id="output_SootnoshenieCement_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>

                              <label for="output_SootnosheniePesok_L">:</label>
                              <div class="input-group" id="a2">
                                <input type="text" class="form-control" id="output_SootnosheniePesok_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>

                              <label for="output_SootnoshenieSheben_L">:</label>
                              <div class="input-group" id="a3">
                                <input type="text" class="form-control" id="output_SootnoshenieSheben_L" value="" readonly="readonly">
                                <div class="input-group-addon">л</div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

              </div>
            </div>
          </div>

      </div>
    </div>

    <!--Адресс-->
    <div class="row">
      <div class="col-md-12">
        <address>
           <strong>ООО "К-Бетон"</strong><br /> Россия, Чувашская Республика<br /> г. Чебоксары, Лапсарский проезд 35<br /> <abbr title="Phone">Тел.:</abbr> (8352) 123-456
        </address>
      </div>
    </div>

  </div>

  

  </form>
</body>
</html>