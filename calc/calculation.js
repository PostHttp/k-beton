function mainCalcFunc()
{
    // INPUT
    //Данные для замеса
    var inputVBeton = document.getElementById("inputVBeton"); // Объем бетона, м3
    var selectMBetona = document.getElementById("selectMBetona"); // Марка (класс) бетона
    var selectPGSmesi = document.getElementById("selectPGSmesi"); // Подвижность или жесткость смеси
    var selectNSmesi = document.getElementById("selectNSmesi"); // Подвижность или жесткость смеси - значение
    // Исходные данные
    var inputBetonomeshalks = document.getElementById("inputBetonomeshalks"); // Бетономешалка, л
    var selectMCement = document.getElementById("selectMCement"); // Марка цемента
    var selectSmallFiller = document.getElementById("selectSmallFiller"); // Мелкий заполнитель, мм
    var selectBigFillerType = document.getElementById("selectBigFillerType"); // Крупный заполнитель - гравий или щебень
    var selectBigFillerValue = document.getElementById("selectBigFillerValue"); // Крупный заполнитель - значение, мм
    

    // OUTPUT
    // Состав бетона (кг)
    var output_Voda_KG = document.getElementById("output_Voda_KG"); // Вода, кг
    var output_Cement_KG = document.getElementById("output_Cement_KG"); // Цемент, кг
    var output_Sheben_KG = document.getElementById("output_Sheben_KG"); // Щебень, кг
    var output_Pesok_KG = document.getElementById("output_Pesok_KG"); // Песок, кг
    var output_VodoCement_KG = document.getElementById("output_VodoCement_KG"); // Водоцемент
    var output_PBetonSmesi_KG = document.getElementById("output_PBetonSmesi_KG"); // Плотность бетонной смеси, кг
    var output_SootnoshenieCement_KG = document.getElementById("output_SootnoshenieCement_KG"); // Соотношение Ц, кг
    var output_SootnosheniePesok_KG = document.getElementById("output_SootnosheniePesok_KG"); // Соотношение П, кг
    var output_SootnoshenieSheben_KG = document.getElementById("output_SootnoshenieSheben_KG"); // Соотношение Щ, кг
    // Состав бетона (л)
    var output_Voda_L = document.getElementById("output_Voda_L"); // Вода, л
    var output_Cement_L = document.getElementById("output_Cement_L"); // Цемент, л
    var output_Sheben_L = document.getElementById("output_Sheben_L"); // Щебень, л
    var output_Pesok_L = document.getElementById("output_Pesok_L"); // Песок, л
    var output_VodoCement_L = document.getElementById("output_VodoCement_L"); // Водоцемент
    var output_PBetonSmesi_L = document.getElementById("output_PBetonSmesi_L"); // Плотность бетонной смеси, л
    var output_SootnoshenieCement_L = document.getElementById("output_SootnoshenieCement_L"); // Соотношение Ц, л
    var output_SootnosheniePesok_L = document.getElementById("output_SootnosheniePesok_L"); // Соотношение П, л
    var output_SootnoshenieSheben_L = document.getElementById("output_SootnoshenieSheben_L"); // Соотношение Щ, л


    // CALCULATION
    // Состав бетона (кг)
    //Справочные данные
    var v_nas_cement = 1.3,
        v_nas_pesok = 1.5,
        v_nas_sheben = 1.48;    
    var plot_cement = 3.1,
        plot_pesok = 2.63,
        plot_sheben = 2.6,
        pust_sheben = 0.43;

    // Водоцемент, кг
    var A = 0.6,
        A1 = 0.4;
    var marka_betona = parseInt(selectMBetona.value);
    var marka_cementa = parseInt(selectMCement.value);
    var VC = (marka_cementa * A) / (marka_betona + 0.5 * A * marka_cementa);
    if (VC < 0.4) { VC = (marka_cementa * A1) / (marka_betona - 0.5 * A1 * marka_cementa); }
    var vc_val = VC.toFixed(2)
    output_VodoCement_KG.value = vc_val;

    // Вода, кг
    var podv_smesi = parseInt(selectNSmesi.value);
    var frak_grav = parseInt(selectBigFillerValue.value);
    if (selectPGSmesi.value == 1) podv_smesi = podv_smesi + 4;
    if (selectBigFillerType.value == 1) frak_grav = frak_grav + 4;
    var J4 = [150, 135, 125, 120, 160, 150, 135, 130],
        J3 = [160, 145, 130, 125, 170, 160, 145, 140],
        J2 = [165, 150, 135, 130, 175, 165, 150, 145],
        J1 = [175, 160, 145, 140, 185, 175, 160, 155],
        P1 = [190, 175, 160, 155, 200, 190, 175, 170],
        P2 = [200, 185, 170, 165, 210, 200, 185, 180],
        P3 = [215, 205, 190, 180, 225, 215, 200, 190],
        P4 = [225, 220, 205, 195, 235, 230, 215, 205];
    var voda_table = [J4, J3, J2, J1, P1, P2, P3, P4];
    var voda_val = voda_table[podv_smesi][frak_grav]
    output_Voda_KG.value = voda_val;
    
    // Цемент, кг
    var cement_val = Math.round(voda_val / vc_val);
    output_Cement_KG.value = cement_val;
    if(cement_val > 400) //Цемент проверка на более 400кг
    {
        var cement_razn = cement_val - 400, 
        litr_razn = Math.round(cement_razn / 10);
        voda_val = voda_val + litr_razn
        output_Voda_KG.value = voda_val;
    }

    // Щебень, кг
    var k_raz;
    if (podv_smesi < 2) { k_raz = 1.1; }
    else
    {
        var raz_voda = Math.round(voda_val / 10) * 10;
        var k = 150;
        for (j = 0; k < raz_voda; j++) { k = k + 10; }
        if(j > 7) { j = 7; }
        raz_J4 = [];
        raz_J3 = [];
        raz_J2 = [1.14, 1.15, 1.18, 1.21, 1.25, 1.27, 1.31, 1.33];
        raz_J1 = [1.17, 1.19, 1.22, 1.25, 1.28, 1.30, 1.34, 1.36];
        raz_P1 = [1.21, 1.23, 1.26, 1.29, 1.31, 1.34, 1.37, 1.39];
        raz_P2 = [1.29, 1.31, 1.33, 1.35, 1.38, 1.40, 1.42, 1.44];
        raz_P3 = [1.40, 1.41, 1.42, 1.44, 1.46, 1.48, 1.50, 1.52];
        raz_P4 = [1.48, 1.49, 1.50, 1.51, 1.53, 1.55, 1.57, 1.59];
        var k_raz_mel_pes = [raz_J4, raz_J3, raz_J2, raz_J1, raz_P1, raz_P2, raz_P3, raz_P4];
        k_raz = k_raz_mel_pes[podv_smesi][j];
        var fr_pesok = parseInt(selectSmallFiller.value);
        if (fr_pesok == 0) { k_raz = k_raz - 0.04; }
        if (fr_pesok == 2) { k_raz = k_raz + 0.04; }
    }
    var kr_zap_val = Math.round(1000 / (((k_raz * pust_sheben) / v_nas_sheben) + 1 / plot_sheben));
    output_Sheben_KG.value = kr_zap_val;

    // Песок, кг
    var ml_zap_val = Math.round((1000 - kr_zap_val / plot_sheben - cement_val / plot_cement - voda_val) * plot_pesok);
    output_Pesok_KG.value = ml_zap_val;

    // Плотность бетонной смеси
    var plot_smesi=Math.round(cement_val+voda_val+ml_zap_val+kr_zap_val);
    output_PBetonSmesi_KG.value=plot_smesi;

    // Соотношение, кг
    output_SootnoshenieCement_KG.value=1;
    output_SootnosheniePesok_KG.value=(ml_zap_val/cement_val).toFixed(1);
    output_SootnoshenieSheben_KG.value=(kr_zap_val/cement_val).toFixed(1);




    // Состав бетона (л)
    // Водоцемент, л
    output_VodoCement_L.value = vc_val;

    // Вода, л
    output_Voda_L.value = voda_val;
    litr_cement_val = Math.round(cement_val/v_nas_cement);
    litr_kr_zap_val = Math.round(kr_zap_val/v_nas_sheben);
    litr_ml_zap_val = Math.round(ml_zap_val/v_nas_pesok);

    // Цемент, л
    output_Cement_L.value = litr_cement_val;

    // Щебень, л
    output_Sheben_L.value = litr_kr_zap_val;

    // Песок, л
    output_Pesok_L.value = litr_ml_zap_val;

    // Плотность бетонной смеси
    var plot_smesi=Math.round(cement_val+voda_val+ml_zap_val+kr_zap_val);
    output_PBetonSmesi_L.value=plot_smesi;

    //Соотношение, л
    output_SootnoshenieCement_L.value = 1;
    output_SootnosheniePesok_L.value = (litr_ml_zap_val / litr_cement_val).toFixed(1);
    output_SootnoshenieSheben_L.value = (litr_kr_zap_val / litr_cement_val).toFixed(1);  
}