# Praktikum-Pemodelan-Beriontasi-Objek
Tugas Praktikum Pemodelan Berontasi Objek
class BangunRuang:
    def __init__(self, sisi, jari_jari):
        self.sisi = sisi
        self.jari_jari = jari_jari

    def move (self):
        print("move!")

class persegi(BangunRuang):
    def __init__(self, sisi):
        super().__init__(sisi, 0)

    def move (self):
        print("Aku Adalah Persegi")

    def luas(self):
        print(f"Luas Persegi dengan SISI {self.sisi} adalah {self.sisi*self.sisi}")

class lingakran(BangunRuang):
    def __init__(self, jari_jari):
        super().__init__(0, jari_jari)

    def move (self):
        print("Aku Adalah Lingkaran")

    def luas(self):
        print(f"Luas Persegi dengan jari-jari {self.jari_jari} adalah {self.jari_jari* self.jari_jari*3.14}")

per = persegi(4)
per.move()
per.luas()

ling = lingakran(7)
ling.move()
ling.luas()
Aku Adalah Persegi
Luas Persegi dengan SISI 4 adalah 16
Aku Adalah Lingkaran
Luas Persegi dengan jari-jari 7 adalah 153.86
