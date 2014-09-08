package munchkin_cthulhu;

/**
 *
 * @author Germán Martínez Maldonado
 * @author José Rubén Sánchez Iruela
 * @author Pablo Sánchez Robles
 */
public class JD_nombresJugadores extends javax.swing.JDialog {

    private String[] nombres;

    /** Creates new form JD_nombresJugadores */
    public JD_nombresJugadores(java.awt.Frame parent, boolean modal) {
        super(parent, modal);
        
        initComponents();
        
        this.addWindowListener(new java.awt.event.WindowAdapter() {

            //@Override
            public void windowsClosing(java.awt.event.WindowEvent e) {
                System.exit(0);
            }
        });
        
        this.setLocationRelativeTo(null);
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jCB_tresJugadores = new javax.swing.JCheckBox();
        jT_jugador0 = new javax.swing.JTextField();
        jL_jugador0 = new javax.swing.JLabel();
        jL_jugador1 = new javax.swing.JLabel();
        jT_jugador1 = new javax.swing.JTextField();
        jL_jugador2 = new javax.swing.JLabel();
        jT_jugador2 = new javax.swing.JTextField();
        botonCancelar = new javax.swing.JButton();
        botonComenzarJuego = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setTitle("Escribe los nombres de los jugadores");
        setIconImage(null);
        setMinimumSize(new java.awt.Dimension(320, 240));
        setName("jD_panelPrincipal"); // NOI18N
        setResizable(false);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jCB_tresJugadores.setText("Tres jugadores");
        jCB_tresJugadores.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jCB_tresJugadoresActionPerformed(evt);
            }
        });
        getContentPane().add(jCB_tresJugadores, new org.netbeans.lib.awtextra.AbsoluteConstraints(30, 20, -1, -1));

        jT_jugador0.setName("jT_jugador0"); // NOI18N
        jT_jugador0.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jT_jugador0ActionPerformed(evt);
            }
        });
        getContentPane().add(jT_jugador0, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 58, 150, -1));

        jL_jugador0.setLabelFor(jT_jugador0);
        jL_jugador0.setText("Jugador 1");
        jL_jugador0.setOpaque(true);
        getContentPane().add(jL_jugador0, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 60, -1, -1));

        jL_jugador1.setLabelFor(jT_jugador1);
        jL_jugador1.setText("Jugador 2");
        getContentPane().add(jL_jugador1, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 90, -1, -1));
        getContentPane().add(jT_jugador1, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 88, 150, -1));

        jL_jugador2.setLabelFor(jT_jugador2);
        jL_jugador2.setText("Jugador 3");
        jL_jugador2.setEnabled(false);
        getContentPane().add(jL_jugador2, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 120, -1, -1));

        jT_jugador2.setEnabled(false);
        jT_jugador2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jT_jugador2ActionPerformed(evt);
            }
        });
        getContentPane().add(jT_jugador2, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 118, 150, -1));

        botonCancelar.setText("Cancelar");
        botonCancelar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                botonCancelarActionPerformed(evt);
            }
        });
        getContentPane().add(botonCancelar, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 160, -1, -1));

        botonComenzarJuego.setText("Comenzar Juego");
        botonComenzarJuego.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                botonComenzarJuegoActionPerformed(evt);
            }
        });
        getContentPane().add(botonComenzarJuego, new org.netbeans.lib.awtextra.AbsoluteConstraints(150, 160, -1, -1));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jCB_tresJugadoresActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jCB_tresJugadoresActionPerformed
        this.jL_jugador2.setEnabled(this.jCB_tresJugadores.isSelected());
        this.jT_jugador2.setEnabled(this.jCB_tresJugadores.isSelected());
    }//GEN-LAST:event_jCB_tresJugadoresActionPerformed

    private void jT_jugador2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jT_jugador2ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jT_jugador2ActionPerformed

    private void jT_jugador0ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jT_jugador0ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jT_jugador0ActionPerformed

    private void botonCancelarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_botonCancelarActionPerformed
        System.exit(0);
    }//GEN-LAST:event_botonCancelarActionPerformed

    private void botonComenzarJuegoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_botonComenzarJuegoActionPerformed
        if (this.jCB_tresJugadores.isSelected()) {
            this.nombres = new String[3];
            this.nombres[2] = this.jT_jugador2.getText();
        } else {
            this.nombres = new String[2];
        }

        this.nombres[0] = this.jT_jugador0.getText();
        this.nombres[1] = this.jT_jugador1.getText();

        this.dispose();
    }//GEN-LAST:event_botonComenzarJuegoActionPerformed

    /**
     * @param args the command line arguments
     */
    public String[] getNombres() {
        this.setVisible(true);
        return this.nombres;
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton botonCancelar;
    private javax.swing.JButton botonComenzarJuego;
    private javax.swing.JCheckBox jCB_tresJugadores;
    private javax.swing.JLabel jL_jugador0;
    private javax.swing.JLabel jL_jugador1;
    private javax.swing.JLabel jL_jugador2;
    private javax.swing.JTextField jT_jugador0;
    private javax.swing.JTextField jT_jugador1;
    private javax.swing.JTextField jT_jugador2;
    // End of variables declaration//GEN-END:variables
}
