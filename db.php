<?php

/* COMPUTER: "MARCA" | "PROCESSORE" | "MEMORIA" | "SISTEMA" | "SCHEDA VIDEO" */

/* DESKTOP: "CASE" | "ALIMENTAZIONE" | "RAFFREDDAMENTO"  */

/* PORTATILE: "DISPLAY" | "MOUSEPAD" | "BATTERIA" | "WEBCAM" */


$computers = [
    new Desktop("NitroPC", "AMD Ryzen 7 5800X (8 core, fino a 4,70GHz)", "4TB", "WINDOWS 11", "NVIDIA GeForce RTX 3060 12GB GDDR6", "MARINA NERO", "CORE 900W GOLD", "RAFFREDDAMENTO A LIQUIDO MSI 1929"),
    new Desktop("ASUS", "NVIDIA 970TI", "1TB", "LINUX", "NVIDIA GeForge 2060", "MARS GAMING", "GOLD 850W", "RAFFREDDAMENTO MSI"),
    new Portatile("intel", "Processore Intel Core i5-6200U 2.30 GHz", "256MB", "WINDOWS 7 PRO", "Scheda Video Intel HD 520", "12.2 pollici", "Mousepad Antiaderente", "Batteria Poca", "Webcam integrata"),
    new Portatile("MSI", "Processore Intel Core i5-6200U 2.30 GHz", "5TB", "WINDOWS 10 PRO", "Scheda Video Intel H 1520", "22.2 pollici", "Mousepad meccanico", "Batteria multipla", "Webcam integrata colorata"),
];
