# Skloňování

Skloňování do 5. pádu

## Použití

### Parametry

```
https://api.viptrust.com/sklonovani/?api_key=API_KEY&name=USER NAME
```

Dva povinné atributy (api_key, name)
api_key - vygenerovaný API klíč
name - oslovení, které chceme skloňovat (píšeme s mezerami a osoby oddělujeme spojovacím výrazem "a")

### Request

```
https://api.viptrust.com/sklonovani/?api_key=API_KEY&name=Vosyka Miroslav Ing. a Vosyková Vlasta Mgr. a VIP trust s.r.o.
```

Vstup URL s povinnými parametry

### Response

```
[{"full_name":"Vosyka Miroslav Ing.","first_name":"Miroslav","middle_name":null,"last_name":"Vosyka","degree":["Ing."],"pohlavi":"man","vocative_first_name":"Miroslave","vocative_last_name":"Vosyko","excluded":null},{"full_name":"Vosykov\u00e1 Vlasta Mgr.","first_name":"Vlasta","middle_name":null,"last_name":"Vosykov\u00e1","degree":["Mgr."],"pohlavi":"woman","vocative_first_name":"Vlasto","vocative_last_name":"Vosykov\u00e1","excluded":null},{"full_name":"VIP trust s.r.o.","company":"s.r.o.","company_name":"VIP trust"}]
```

Výstup JSON obsahující všechny osoby ve stringu, společně s informacemi o subjektu

Pro fyzickou osobu:
* Celé jméno / string
* Jméno / string
* Prostřední jméno / string
* Příjmení / string
* Tituly / array() = může být totiž více titulů
* Pohlaví / (muž, žena)
* Skloňování jména / array() pro každý pád (zatím jen 5. pád)
* Skloňování příjmení / array() pro každý pád (zatím jen 5. pád)
* Excluded fráze / string (SJM apod.)

Pro právnickou osobu:
* Celý název / string
* Společnost / string
* Název společnosti / string