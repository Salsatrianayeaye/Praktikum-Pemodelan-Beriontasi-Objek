# Praktikum-Pemodelan-Beriontasi-Objek
Tugas Praktikum Pemodelan Berontasi Objek
def to_camel_case(sentence):
    words = sentence.split()

    if len(words) == 1:
        return words[0]

    camel_case = words[0].lower() + ''.join(word.capitalize() for word in words[1:])

    return camel_case

input_sentence = "ini adalah contoh kalimat untuk camel case"
camelcased = to_camel_case(input_sentence)
print("Hasil Camel Case:", camelcased)
