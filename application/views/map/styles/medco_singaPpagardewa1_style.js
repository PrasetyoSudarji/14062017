var size = 0;

var styleCache_medco_singaPpagardewa1={}
var style_medco_singaPpagardewa1 = function(feature, resolution){
    var context = {
        feature: feature,
        variables: {}
    };
    var value = ""
    var size = 0;
    var style = [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(5,56,207,0.7)', lineDash: null, lineCap: 'square', lineJoin: 'bevel', width: 0}),
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
        if (!styleCache_medco_singaPpagardewa1[key]){
            var text = new ol.style.Text({
                  font: '10.725px \'MS Shell Dlg 2\', sans-serif',
                  text: labelText,
                  textAlign: "center",
                  fill: new ol.style.Fill({
                    color: 'rgba(0, 0, 0, 1)'
                  }),
                });
            styleCache_medco_singaPpagardewa1[key] = new ol.style.Style({"text": text})
        }
    } else {
        if ("" !== null) {
            labelText = String("");
        } else {
            labelText = ""
        }
        var key = value + "_" + labelText
        if (!styleCache_medco_singaPpagardewa1[key]){
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
            styleCache_medco_singaPpagardewa1[key] = new ol.style.Style({"text": text})
        }
    }
    var allStyles = [styleCache_medco_singaPpagardewa1[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};