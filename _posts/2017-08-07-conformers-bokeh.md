---
layout: single
title:  "Calculating and analyzing drug adsorption in MOFs interactively"
date:   2017-08-07
categories: posts
---
This is a compact tutorial on calculating and analyzing adsorption of molecules in metal-organic frameworks.

Step 1:
Get molecule

Step 2:
Generate conformers

Step 3:
Run RASPA simulations

Step 4:
Read RASPA output

Step 5:
Render molecule images

Using openbabel:
```
for i in `ls`
do
obabel $i -O images/$i.svg -xS -xd -xb none
done
```

Step 6:
Plot with bokeh

DMOG (Dimethyloxalylglycine) is a cancer treatment drug, proposed to inhibit
O2 consumption in cancer cell lines HCT116 and PC12, well before activation
of HIF pathways. Here I calculated DMOG adsorption by a well-known metal-organic framework: IRMOF-1.

[Here](https://kbsezginel.github.io/dmogconf/) is the final plot.
