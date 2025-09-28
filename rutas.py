class Ruta:
    def __init__(self, origen, destino):
        self.origen = origen
        self.destino = destino

    def __str__(self):
        return f"Ruta de {self.origen} a {self.destino}"
