var size = 0;

var styleCache_smr_all_2015_maret11={}
var style_smr_all_2015_maret11 = function(feature, resolution){
    var context = {
        feature: feature,
        variables: {}
    };
    var value = ""
    var size = 0;
    var style = [ new ol.style.Style({
        image: new ol.style.Circle({radius: 4.0 + size,
            stroke: new ol.style.Stroke({color: 'rgba(0,0,0,0.7)', lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: 'rgba(245,7,11,0.7)'})})
    })];
    var labelText = "";
    var currentFeature = feature;
    clusteredFeatures = feature.get("features");
    if (typeof clusteredFeatures !== "undefined") {
        if (size >= 2) {
            labelText = size.toString()
        } else {
            labelText = ""
        }
        var key = value + "_" + labelText
        if (!styleCache_smr_all_2015_maret11[key]){
            var text = new ol.style.Text({
                  font: '10.725px \'MS Shell Dlg 2\', sans-serif',
                  text: labelText,
                  textAlign: "center",
                  fill: new ol.style.Fill({
                    color: 'rgba(0, 0, 0, 1)'
                  }),
                });
            styleCache_smr_all_2015_maret11[key] = new ol.style.Style({"text": text})
        }
    } else {
        if ("" !== null) {
            labelText = String("");
        } else {
            labelText = ""
        }
        var key = value + "_" + labelText
        if (!styleCache_smr_all_2015_maret11[key]){
            var text = new ol.style.Text({
                    font: '10.725px \'MS Shell Dlg 2\', sans-serif',
                    text: labelText,
                    textBaseline: "center",
                    textAlign: "left",
                    offsetX: 5,
                    offsetY: 3,
                    fill: new ol.style.Fill({
                      color: 'rgba(0, 0, 0, 1)'
                    }),
                });
            styleCache_smr_all_2015_maret11[key] = new ol.style.Style({"text": text})
        }
    }
    var allStyles = [styleCache_smr_all_2015_maret11[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};