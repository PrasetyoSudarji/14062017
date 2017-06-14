var size = 0;

var styleCache_Persil_All10={}
var style_Persil_All10 = function(feature, resolution){
    var context = {
        feature: feature,
        variables: {}
    };
    var value = ""
    var size = 0;
    var style = [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(0,0,0,1.0)', lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0}), fill: new ol.style.Fill({color: 'rgba(151,36,209,1.0)'})
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
        if (!styleCache_Persil_All10[key]){
            var text = new ol.style.Text({
                  font: '10px \'None\', sans-serif',
                  text: labelText,
                  textAlign: "center",
                  fill: new ol.style.Fill({
                    color: 'rgba(None, None, None, 1)'
                  }),
                });
            styleCache_Persil_All10[key] = new ol.style.Style({"text": text})
        }
    } else {
        if ("" !== null) {
            labelText = String("");
        } else {
            labelText = ""
        }
        var key = value + "_" + labelText
        if (!styleCache_Persil_All10[key]){
            var text = new ol.style.Text({
                    font: '10px \'None\', sans-serif',
                    text: labelText,
                    textBaseline: "center",
                    textAlign: "left",
                    offsetX: 5,
                    offsetY: 3,
                    fill: new ol.style.Fill({
                      color: 'rgba(None, None, None, 1)'
                    }),
                });
            styleCache_Persil_All10[key] = new ol.style.Style({"text": text})
        }
    }
    var allStyles = [styleCache_Persil_All10[key]];
    allStyles.push.apply(allStyles, style);
    return allStyles;
};