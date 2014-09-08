package evaluacion;

import utilidad.LienzoImagen;

/**
 * Ventana interna de visualización de imágenes.
 *
 * @author German Martinez Maldonado
 */
public class VentInternaImag extends javax.swing.JInternalFrame {

    /**
     * Constructor de la ventana interna de visualización de imágenes.
     *
     * @param ancho Ancho de la ventana de imagen.
     * @param alto Alto de la ventana de imagen.
     */
    public VentInternaImag(int ancho, int alto) {
        initComponents();
        lienzoImagen.setSize(ancho, alto);
    }

    /**
     * Obtiene el lienzo de pintado de la ventana de imagen.
     *
     * @return Lienzo de pintado.
     */
    public LienzoImagen getLienzo() {
        return lienzoImagen;
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        panelScroll = new javax.swing.JScrollPane();
        lienzoImagen = new utilidad.LienzoImagen();

        setClosable(true);
        setIconifiable(true);
        setMaximizable(true);
        setResizable(true);
        setMaximumSize(null);
        setMinimumSize(new java.awt.Dimension(400, 400));
        setPreferredSize(new java.awt.Dimension(400, 400));

        panelScroll.setMaximumSize(null);
        panelScroll.setMinimumSize(new java.awt.Dimension(400, 400));
        panelScroll.setPreferredSize(new java.awt.Dimension(400, 400));

        lienzoImagen.setMaximumSize(null);
        lienzoImagen.setMinimumSize(new java.awt.Dimension(400, 400));

        javax.swing.GroupLayout lienzoImagenLayout = new javax.swing.GroupLayout(lienzoImagen);
        lienzoImagen.setLayout(lienzoImagenLayout);
        lienzoImagenLayout.setHorizontalGroup(
            lienzoImagenLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 400, Short.MAX_VALUE)
        );
        lienzoImagenLayout.setVerticalGroup(
            lienzoImagenLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 400, Short.MAX_VALUE)
        );

        panelScroll.setViewportView(lienzoImagen);

        getContentPane().add(panelScroll, java.awt.BorderLayout.CENTER);

        pack();
    }// </editor-fold>//GEN-END:initComponents
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private utilidad.LienzoImagen lienzoImagen;
    private javax.swing.JScrollPane panelScroll;
    // End of variables declaration//GEN-END:variables
}
