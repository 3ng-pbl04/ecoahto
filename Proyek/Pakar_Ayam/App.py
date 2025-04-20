from flask import Flask, render_template, request
app = Flask(__name__)
# Gejala
gejala = {
    "G01": "Nafsu makan menurun",
    "G02": "Sayap terkulai",
    "G03": "Diare",
    "G04": "Mata berair",
    "G05": "Pembengkakan kepala",
    "G06": "Keluar lendir dari hidung",
    "G07": "Bulu kusam dan berdiri",
    "G08": "Kotoran putih encer",
    "G09": "Lemah dan lesu",
    "G10": "Bersin",
    "G11": "Hidung basah dan bengkak",
    "G12": "Bau tidak sedap dari hidung",
    "G13": "Jengger membiru",
    "G14": "Kematian mendadak",
    "G15": "Jalan sempoyongan",
}

# Penyakit
penyakit = {
    "P01": "Newcastle Disease",
    "P02": "Avian Influenza",
    "P03": "Gumboro",
    "P04": "Coryza",
    "P05": "Kolera Ayam",
}

# Aturan (rule base)
aturan = {
    "P01": ["G01", "G02", "G03"],
    "P02": ["G04", "G05", "G06"],
    "P03": ["G07", "G08", "G09"],
    "P04": ["G10", "G11", "G12"],
    "P05": ["G13", "G14", "G15"],
}


#Forward chaining
def diagnosa(gejala_input):
    hasil = []
    for kode_penyakit, syarat_gejala in aturan.items():
        if all(g in gejala_input for g in syarat_gejala):
            hasil.append(penyakit[kode_penyakit])
    return hasil


#contoh 

# gejala_user = ["G01", "G02", "G03"]

# hasil_diagnosa = diagnosa(gejala_user)

# if hasil_diagnosa:
#     print("Diagnosa Penyakit Ayam:")
#     for p in hasil_diagnosa:
#         print("-", p)
# else:
#     print("Tidak ada penyakit yang terdeteksi berdasarkan gejala yang diberikan.")

# Route untuk halaman utama
@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        selected_gejala = request.form.getlist("gejala")
        if selected_gejala:
            hasil_diagnosa = diagnosa(selected_gejala)
        else:
            hasil_diagnosa = []
        return render_template("index.html", gejala=gejala, hasil=hasil_diagnosa)
    
    return render_template("index.html", gejala=gejala, hasil=[])

if __name__ == '__main__':
    app.run(debug=True)