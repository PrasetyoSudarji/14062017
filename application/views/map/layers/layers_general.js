var baseLayer = new ol.layer.Group({
    'title': '',
    layers: [
new ol.layer.Tile({
    'title': 'OSM',
    'type': 'base',
    source: new ol.source.OSM()
})
]	
});
var format_hutan_pgdp0 = new ol.format.GeoJSON();
var features_hutan_pgdp0 = format_hutan_pgdp0.readFeatures(json_hutan_pgdp0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_hutan_pgdp0 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_hutan_pgdp0.addFeatures(features_hutan_pgdp0);var lyr_hutan_pgdp0 = new ol.layer.Vector({
                source:jsonSource_hutan_pgdp0, 
                style: style_hutan_pgdp0,
                title: "hutan_pgdp"
            });var format_medco_singaPpagardewa1 = new ol.format.GeoJSON();

var features_medco_singaPpagardewa1 = format_medco_singaPpagardewa1.readFeatures(json_medco_singaPpagardewa1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_medco_singaPpagardewa1 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_medco_singaPpagardewa1.addFeatures(features_medco_singaPpagardewa1);var lyr_medco_singaPpagardewa1 = new ol.layer.Vector({
                source:jsonSource_medco_singaPpagardewa1, 
                style: style_medco_singaPpagardewa1,
                title: "medco_singaPpagardewa"
            });var format_PIPAGASPGN2 = new ol.format.GeoJSON();
var features_PIPAGASPGN2 = format_PIPAGASPGN2.readFeatures(json_PIPAGASPGN2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PIPAGASPGN2 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_PIPAGASPGN2.addFeatures(features_PIPAGASPGN2);var lyr_PIPAGASPGN2 = new ol.layer.Vector({
                source:jsonSource_PIPAGASPGN2, 
                style: style_PIPAGASPGN2,
                title: "PIPA GAS PGN"
            });var format_PIPAPPGS3 = new ol.format.GeoJSON();
var features_PIPAPPGS3 = format_PIPAPPGS3.readFeatures(json_PIPAPPGS3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PIPAPPGS3 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_PIPAPPGS3.addFeatures(features_PIPAPPGS3);var lyr_PIPAPPGS3 = new ol.layer.Vector({
                source:jsonSource_PIPAPPGS3, 
                style: style_PIPAPPGS3,
                title: "PIPA PPGS"
            });var format_Pipeline_PGDP_20164 = new ol.format.GeoJSON();
var features_Pipeline_PGDP_20164 = format_Pipeline_PGDP_20164.readFeatures(json_Pipeline_PGDP_20164, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Pipeline_PGDP_20164 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_Pipeline_PGDP_20164.addFeatures(features_Pipeline_PGDP_20164);var lyr_Pipeline_PGDP_20164 = new ol.layer.Vector({
                source:jsonSource_Pipeline_PGDP_20164, 
                style: style_Pipeline_PGDP_20164,
                title: "Pipeline_PGDP_2016"
            });var format_JalanBesar5 = new ol.format.GeoJSON();
var features_JalanBesar5 = format_JalanBesar5.readFeatures(json_JalanBesar5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_JalanBesar5 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_JalanBesar5.addFeatures(features_JalanBesar5);var lyr_JalanBesar5 = new ol.layer.Vector({
                source:jsonSource_JalanBesar5, 
                style: style_JalanBesar5,
                title: "Jalan Besar"
            });var format_jln_pro6 = new ol.format.GeoJSON();
var features_jln_pro6 = format_jln_pro6.readFeatures(json_jln_pro6, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_jln_pro6 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_jln_pro6.addFeatures(features_jln_pro6);var lyr_jln_pro6 = new ol.layer.Vector({
                source:jsonSource_jln_pro6, 
                style: style_jln_pro6,
                title: "jln_pro"
            });var format_keamanan_lokasi_pgdp7 = new ol.format.GeoJSON();
var features_keamanan_lokasi_pgdp7 = format_keamanan_lokasi_pgdp7.readFeatures(json_keamanan_lokasi_pgdp7, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_keamanan_lokasi_pgdp7 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_keamanan_lokasi_pgdp7.addFeatures(features_keamanan_lokasi_pgdp7);var lyr_keamanan_lokasi_pgdp7 = new ol.layer.Vector({
                source:jsonSource_keamanan_lokasi_pgdp7, 
                style: style_keamanan_lokasi_pgdp7,
                title: "keamanan_lokasi_pgdp"
            });var format_Koord_patok_As_Built_All8 = new ol.format.GeoJSON();
var features_Koord_patok_As_Built_All8 = format_Koord_patok_As_Built_All8.readFeatures(json_Koord_patok_As_Built_All8, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Koord_patok_As_Built_All8 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_Koord_patok_As_Built_All8.addFeatures(features_Koord_patok_As_Built_All8);var lyr_Koord_patok_As_Built_All8 = new ol.layer.Vector({
                source:jsonSource_Koord_patok_As_Built_All8, 
                style: style_Koord_patok_As_Built_All8,
                title: "Koord_patok_As_Built_All"
            });var format_Persil_pemilik9 = new ol.format.GeoJSON();
var features_Persil_pemilik9 = format_Persil_pemilik9.readFeatures(json_Persil_pemilik9, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Persil_pemilik9 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_Persil_pemilik9.addFeatures(features_Persil_pemilik9);var lyr_Persil_pemilik9 = new ol.layer.Vector({
                source:jsonSource_Persil_pemilik9, 
                style: style_Persil_pemilik9,
                title: "Persil_pemilik"
            });var format_Persil_All10 = new ol.format.GeoJSON();
var features_Persil_All10 = format_Persil_All10.readFeatures(json_Persil_All10, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Persil_All10 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_Persil_All10.addFeatures(features_Persil_All10);var lyr_Persil_All10 = new ol.layer.Vector({
                source:jsonSource_Persil_All10, 
                style: style_Persil_All10,
                title: "Persil_All"
            });var format_smr_all_2015_maret11 = new ol.format.GeoJSON();
var features_smr_all_2015_maret11 = format_smr_all_2015_maret11.readFeatures(json_smr_all_2015_maret11, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_smr_all_2015_maret11 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_smr_all_2015_maret11.addFeatures(features_smr_all_2015_maret11);var lyr_smr_all_2015_maret11 = new ol.layer.Vector({
                source:jsonSource_smr_all_2015_maret11, 
                style: style_smr_all_2015_maret11,
                title: "smr_all_2015_maret"
            });
			
lyr_hutan_pgdp0.setVisible(true);
lyr_medco_singaPpagardewa1.setVisible(true);
lyr_PIPAGASPGN2.setVisible(true);
lyr_PIPAPPGS3.setVisible(true);
lyr_Pipeline_PGDP_20164.setVisible(true);
lyr_JalanBesar5.setVisible(true);
lyr_jln_pro6.setVisible(true);
lyr_keamanan_lokasi_pgdp7.setVisible(true);
lyr_Koord_patok_As_Built_All8.setVisible(false);
lyr_Persil_pemilik9.setVisible(true);
lyr_Persil_All10.setVisible(true);
lyr_smr_all_2015_maret11.setVisible(true);


function view_layer(){
	var ajaxRequest;
	
	try {
		ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
	} catch(e) {
		//Untuk IE
		try {
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
				alert("Gagal karena browser anda tidak mendukung ajax");
				return false;
			}
		}
	}
	
	var value = true;
	//layer hutan
	if (document.getElementById('lyr_hutan_pgdp0').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_hutan_pgdp0.setVisible(value);
	//layer medco_singaPpagardewa
	if (document.getElementById('lyr_medco_singaPpagardewa1').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_medco_singaPpagardewa1.setVisible(value);
	//layer PIPAGASPGN
	if (document.getElementById('lyr_PIPAGASPGN2').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_PIPAGASPGN2.setVisible(value);
	//layer PIPAPPGS
	if (document.getElementById('lyr_PIPAPPGS3').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_PIPAPPGS3.setVisible(value);
	//layer Pipeline_PGDP_2016
	if (document.getElementById('lyr_Pipeline_PGDP_20164').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_Pipeline_PGDP_20164.setVisible(value);
	//layer lyr_JalanBesar5
	if (document.getElementById('lyr_JalanBesar5').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_JalanBesar5.setVisible(value);
	//layer jalan provinsi
	if (document.getElementById('lyr_jln_pro6').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_jln_pro6.setVisible(value);
	//layer keamanan_lokasi_pgdp
	if (document.getElementById('lyr_keamanan_lokasi_pgdp7').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_keamanan_lokasi_pgdp7.setVisible(value);
	//layer patok
	if (document.getElementById('lyr_Koord_patok_As_Built_All8').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_Koord_patok_As_Built_All8.setVisible(value);
	//layer persil pemilik
	if (document.getElementById('lyr_Persil_pemilik9').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_Persil_pemilik9.setVisible(value);
	//layer persil all
	if (document.getElementById('lyr_Persil_All10').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_Persil_All10.setVisible(value);
	//layer sumur
	if (document.getElementById('lyr_smr_all_2015_maret11').checked == true ){
		value = true;
	}else{
		value = false;
	}
	lyr_smr_all_2015_maret11.setVisible(value);
	
}	

//lyr_hutan_pgdp0.setVisible(true);lyr_medco_singaPpagardewa1.setVisible(true);lyr_PIPAGASPGN2.setVisible(true);lyr_PIPAPPGS3.setVisible(true);lyr_Pipeline_PGDP_20164.setVisible(true);lyr_JalanBesar5.setVisible(true);lyr_jln_pro6.setVisible(true);lyr_keamanan_lokasi_pgdp7.setVisible(true);lyr_Koord_patok_As_Built_All8.setVisible(true);lyr_Persil_pemilik9.setVisible(true);lyr_Persil_All10.setVisible(true);lyr_smr_all_2015_maret11.setVisible(true);

var layersList = [baseLayer,lyr_hutan_pgdp0,lyr_medco_singaPpagardewa1,lyr_PIPAGASPGN2,lyr_PIPAPPGS3,lyr_Pipeline_PGDP_20164,lyr_JalanBesar5,lyr_jln_pro6,lyr_keamanan_lokasi_pgdp7,lyr_Koord_patok_As_Built_All8,lyr_Persil_pemilik9,lyr_Persil_All10,lyr_smr_all_2015_maret11];
lyr_hutan_pgdp0.set('fieldAliases', {'Name': 'Name', 'jenis_hutan': 'jenis_hutan', });
lyr_medco_singaPpagardewa1.set('fieldAliases', {'Id': 'Id', 'Keterangan': 'Keterangan', });
lyr_PIPAGASPGN2.set('fieldAliases', {'Id': 'Id', 'line_name': 'line_name', 'Length_M': 'Length_M', 'size': 'size', });
lyr_PIPAPPGS3.set('fieldAliases', {'Id': 'Id', 'line_name': 'line_name', 'Length_M': 'Length_M', 'size': 'size', });
lyr_Pipeline_PGDP_20164.set('fieldAliases', {'Name': 'Name', 'Length_m': 'Length_m', 'Keterangan': 'Keterangan', 'Ukuran': 'Ukuran', 'Note': 'Note', 'Energy_typ': 'Energy_typ', 'Length_mII': 'Length_mII', 'Inst_DATE': 'Inst_DATE', 'Inst_BY': 'Inst_BY', 'Schedule': 'Schedule', 'Phase': 'Phase', 'Create_by': 'Create_by', 'Status': 'Status', 'Map_Source': 'Map_Source', 'Coating_ty': 'Coating_ty', 'Wallthickn': 'Wallthickn', 'ProjectNum': 'ProjectNum', 'Pipe_type': 'Pipe_type', });
lyr_JalanBesar5.set('fieldAliases', {'Id': 'Id', 'Keterangan': 'Keterangan', });
lyr_jln_pro6.set('fieldAliases', {'Id': 'Id', });
lyr_keamanan_lokasi_pgdp7.set('fieldAliases', {'WELL_COE': 'WELL_COE', 'E_WGS84': 'E_WGS84', 'N_WGS84': 'N_WGS84', 'LATITUDE': 'LATITUDE', 'LONGITUDE': 'LONGITUDE', 'DATUM': 'DATUM', 'Waktu': 'Waktu', 'Kejadian': 'Kejadian', 'Level': 'Level', });
lyr_Koord_patok_As_Built_All8.set('fieldAliases', {'Point': 'Point', 'E': 'E', 'N': 'N', 'Z': 'Z', 'Latitude': 'Latitude', 'Longitud': 'Longitud', 'Lokasi': 'Lokasi', });
lyr_Persil_pemilik9.set('fieldAliases', {'Id': 'Id', 'Pemilik': 'Pemilik', 'No_SKT': 'No_SKT', 'No_KPL': 'No_KPL', 'Lokasi': 'Lokasi', 'Dokumen': 'Dokumen', });
lyr_Persil_All10.set('fieldAliases', {'Id': 'Id', 'Lokasi': 'Lokasi', 'L_m2': 'L_m2', 'Desa': 'Desa', 'Kecamatan': 'Kecamatan', 'Kabupaten': 'Kabupaten', 'Provinsi': 'Provinsi', 'Dokumen': 'Dokumen', 'Rekom_Gub': 'Rekom_Gub', 'SK_Bupati': 'SK_Bupati', 'IPPKH': 'IPPKH', 'Ijin': 'Ijin', 'Pembayaran': 'Pembayaran', 'Keterangan': 'Keterangan', 'St_Dok': 'St_Dok', 'Link_dok': 'Link_dok', });
lyr_smr_all_2015_maret11.set('fieldAliases', {'Well_Name': 'Well_Name', 'Easting': 'Easting', 'Northing': 'Northing', 'H_GPSLev_E': 'H_GPSLev_E', 'H_GPSLev_1': 'H_GPSLev_1', 'H_ellips': 'H_ellips', 'Sumber_Dat': 'Sumber_Dat', 'Note': 'Note', 'Struktur': 'Struktur', 'Keterangan': 'Keterangan', 'Latitude_d': 'Latitude_d', 'Longitude_': 'Longitude_', 'Latitude_1': 'Latitude_1', 'Longitude1': 'Longitude1', 'Negm96': 'Negm96', 'Tekanan': 'Tekanan', 'FL_Estimas': 'FL_Estimas', 'FL_Ukuran': 'FL_Ukuran', 'Pipa': 'Pipa', 'FL_Pasang': 'FL_Pasang', 'Vendor': 'Vendor', 'Mulai': 'Mulai', 'Selesai': 'Selesai', });

lyr_hutan_pgdp0.set('fieldImages', {'Name': 'TextEdit', 'jenis_hutan': 'TextEdit',});
lyr_medco_singaPpagardewa1.set('fieldImages', {'Id': 'TextEdit', 'Keterangan': 'TextEdit', });
lyr_PIPAGASPGN2.set('fieldImages', {'Id': 'TextEdit', 'line_name': 'TextEdit', 'Length_M': 'TextEdit', 'size': 'TextEdit', });
lyr_PIPAPPGS3.set('fieldImages', {'Id': 'TextEdit', 'line_name': 'TextEdit', 'Length_M': 'TextEdit', 'size': 'TextEdit', });
lyr_Pipeline_PGDP_20164.set('fieldImages', {'Name': 'TextEdit', 'Length_m': 'TextEdit', 'Keterangan': 'TextEdit', 'Ukuran': 'TextEdit', 'Note': 'TextEdit', 'Energy_typ': 'TextEdit', 'Length_mII': 'TextEdit', 'Inst_DATE': 'TextEdit', 'Inst_BY': 'TextEdit', 'Schedule': 'TextEdit', 'Phase': 'TextEdit', 'Create_by': 'TextEdit', 'Status': 'TextEdit', 'Map_Source': 'TextEdit', 'Coating_ty': 'TextEdit', 'Wallthickn': 'TextEdit', 'ProjectNum': 'TextEdit', 'Pipe_type': 'TextEdit', });
lyr_JalanBesar5.set('fieldImages', {'Id': 'TextEdit', 'Keterangan': 'TextEdit', });
lyr_jln_pro6.set('fieldImages', {'Id': 'TextEdit', });
lyr_keamanan_lokasi_pgdp7.set('fieldImages', {'WELL_COE': 'TextEdit', 'E_WGS84': 'TextEdit', 'N_WGS84': 'TextEdit', 'LATITUDE': 'TextEdit', 'LONGITUDE': 'TextEdit', 'DATUM': 'TextEdit', 'Waktu': 'TextEdit', 'Kejadian': 'TextEdit', 'Level': 'TextEdit', });
lyr_Koord_patok_As_Built_All8.set('fieldImages', {'Point': 'TextEdit', 'E': 'TextEdit', 'N': 'TextEdit', 'Z': 'TextEdit', 'Latitude': 'TextEdit', 'Longitud': 'TextEdit', 'Lokasi': 'TextEdit', });
lyr_Persil_pemilik9.set('fieldImages', {'Id': 'TextEdit', 'Pemilik': 'TextEdit', 'No_SKT': 'TextEdit', 'No_KPL': 'TextEdit', 'Lokasi': 'TextEdit', 'Dokumen': 'TextEdit', });
lyr_Persil_All10.set('fieldImages', {'Id': 'TextEdit', 'Lokasi': 'TextEdit', 'L_m2': 'TextEdit', 'Desa': 'TextEdit', 'Kecamatan': 'TextEdit', 'Kabupaten': 'TextEdit', 'Provinsi': 'TextEdit', 'Dokumen': 'TextEdit', 'Rekom_Gub': 'TextEdit', 'SK_Bupati': 'TextEdit', 'IPPKH': 'TextEdit', 'Ijin': 'TextEdit', 'Pembayaran': 'TextEdit', 'Keterangan': 'TextEdit', 'St_Dok': 'TextEdit', 'Link_dok': 'TextEdit', });
lyr_smr_all_2015_maret11.set('fieldImages', {'Well_Name': 'TextEdit', 'Easting': 'TextEdit', 'Northing': 'TextEdit', 'H_GPSLev_E': 'TextEdit', 'H_GPSLev_1': 'TextEdit', 'H_ellips': 'TextEdit', 'Sumber_Dat': 'TextEdit', 'Note': 'TextEdit', 'Struktur': 'TextEdit', 'Keterangan': 'TextEdit', 'Latitude_d': 'TextEdit', 'Longitude_': 'TextEdit', 'Latitude_1': 'TextEdit', 'Longitude1': 'TextEdit', 'Negm96': 'TextEdit', 'Tekanan': 'TextEdit', 'FL_Estimas': 'TextEdit', 'FL_Ukuran': 'TextEdit', 'Pipa': 'TextEdit', 'FL_Pasang': 'TextEdit', 'Vendor': 'TextEdit', 'Mulai': 'TextEdit', 'Selesai': 'TextEdit', });

lyr_hutan_pgdp0.set('fieldLabels', {'Name': 'inline label', 'jenis_hutan': 'inline label',});
lyr_medco_singaPpagardewa1.set('fieldLabels', {'Id': 'inline label', 'Keterangan': 'inline label', });
lyr_PIPAGASPGN2.set('fieldLabels', {'Id': 'inline label', 'line_name': 'inline label', 'Length_M': 'inline label', 'size': 'inline label', });
lyr_PIPAPPGS3.set('fieldLabels', {'Id': 'inline label', 'line_name': 'inline label', 'Length_M': 'inline label', 'size': 'inline label', });
lyr_Pipeline_PGDP_20164.set('fieldLabels', {'Name': 'inline label', 'Length_m': 'inline label', 'Keterangan': 'inline label', 'Ukuran': 'inline label', 'Note': 'inline label', 'Energy_typ': 'inline label', 'Length_mII': 'inline label', 'Inst_DATE': 'inline label', 'Inst_BY': 'inline label', 'Schedule': 'inline label', 'Phase': 'inline label', 'Create_by': 'inline label', 'Status': 'inline label', 'Map_Source': 'inline label', 'Coating_ty': 'inline label', 'Wallthickn': 'inline label', 'ProjectNum': 'inline label', 'Pipe_type': 'inline label', });
lyr_JalanBesar5.set('fieldLabels', {'Id': 'inline label', 'Keterangan': 'inline label', });
lyr_jln_pro6.set('fieldLabels', {'Id': 'inline label', });
lyr_keamanan_lokasi_pgdp7.set('fieldLabels', {'WELL_COE': 'inline label', 'E_WGS84': 'inline label', 'N_WGS84': 'inline label', 'LATITUDE': 'inline label', 'LONGITUDE': 'inline label', 'DATUM': 'inline label', 'Waktu': 'inline label', 'Kejadian': 'inline label', 'Level': 'inline label', });
lyr_Koord_patok_As_Built_All8.set('fieldLabels', {'Point': 'inline label', 'E': 'inline label', 'N': 'inline label', 'Z': 'inline label', 'Latitude': 'inline label', 'Longitud': 'inline label', 'Lokasi': 'inline label', });
lyr_Persil_pemilik9.set('fieldLabels', {'Id': 'inline label', 'Pemilik': 'inline label', 'No_SKT': 'inline label', 'No_KPL': 'inline label', 'Lokasi': 'inline label', 'Dokumen': 'inline label', });
lyr_Persil_All10.set('fieldLabels', {'Id': 'inline label', 'Lokasi': 'inline label', 'L_m2': 'inline label', 'Desa': 'inline label', 'Kecamatan': 'inline label', 'Kabupaten': 'inline label', 'Provinsi': 'inline label', 'Dokumen': 'inline label', 'Rekom_Gub': 'inline label', 'SK_Bupati': 'inline label', 'IPPKH': 'inline label', 'Ijin': 'inline label', 'Pembayaran': 'inline label', 'Keterangan': 'inline label', 'St_Dok': 'inline label', 'Link_dok': 'inline label', });
lyr_smr_all_2015_maret11.set('fieldLabels', {'Well_Name': 'inline label', 'Easting': 'inline label', 'Northing': 'inline label', 'H_GPSLev_E': 'inline label', 'H_GPSLev_1': 'inline label', 'H_ellips': 'inline label', 'Sumber_Dat': 'inline label', 'Note': 'inline label', 'Struktur': 'inline label', 'Keterangan': 'inline label', 'Latitude_d': 'inline label', 'Longitude_': 'inline label', 'Latitude_1': 'inline label', 'Longitude1': 'inline label', 'Negm96': 'inline label', 'Tekanan': 'inline label', 'FL_Estimas': 'inline label', 'FL_Ukuran': 'inline label', 'Pipa': 'inline label', 'FL_Pasang': 'inline label', 'Vendor': 'inline label', 'Mulai': 'inline label', 'Selesai': 'inline label', });
lyr_smr_all_2015_maret11.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});