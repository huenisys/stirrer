# huenisys/stirrer

composer plugin for installing huenisys/stir

## usage

Simply have your composer package have type: stir-package and that will force
the src to be installed in the root _stir folder. 
You must require: huenisys/stirrer

```
"type": "stir-package",
"require": {
    "huenisys/stirrer": "dev-master",
},
```

