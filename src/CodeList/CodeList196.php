<?php declare(strict_types=1);

namespace Ribal\Onix\CodeList;

use Ribal\Onix\CodeList\CodeListInterface;

/**
 * ONIX Code List 196
 *
 * Used with <ProductFormFeatureValue> <b335>
 *
 * @see https://ns.editeur.org/onix/en/196
 */
class CodeList196 extends CodeList implements CodeListInterface
{
    /**
     * Code List 196 for en (English)
     * E-publication accessibility details
     *
     * @var array
     * @see https://ns.editeur.org/onix/en/196
     */
    protected static $en = [
        '00' => 'Accessibility summary',
        '01' => 'LIA Compliance Scheme',
        '02' => 'EPUB Accessibility Specification 1.0 A',
        '03' => 'EPUB Accessibility Specification 1.0 AA',
        '05' => 'PDF/UA',
        '08' => 'Unknown accessibility',  // NEW in Issue 70
        '09' => 'Inaccessible',
        '10' => 'No reading system accessibility options disabled (except)',
        '11' => 'Table of contents navigation',
        '12' => 'Index navigation',
        '13' => 'Reading order',
        '14' => 'Short alternative descriptions',
        '15' => 'Full alternative descriptions',
        '16' => 'Visualised data also available as non-graphical data',
        '17' => 'Accessible math content',
        '18' => 'Accessible chem content',
        '19' => 'Print-equivalent page numbering',
        '20' => 'Synchronised pre-recorded audio',
        '21' => 'Text-to-speech hinting provided',
        '22' => 'Language tagging provided',
        '23' => 'Accessible interactive elements',  // NEW in Issue 65
        '24' => 'Dyslexia readability',
        '25' => 'Use of color',
        '26' => 'Use of contrast',
        '27' => 'Accessibility certification',  // NEW in Issue 68
        '94' => 'Compliance web page for detailed accessibility information',
        '95' => "Trusted intermediary's web page for detailed accessibility information",
        '96' => "Publisher's web page for detailed accessibility information",
        '97' => 'Compatibility tested',
        '98' => 'Trusted Intermediary contact',
        '99' => 'Publisher contact for further accessibility information',
    ];

    /**
     * Code List 196 for de (German)
     * E-Publikations-Zugänglichkeitsdetails
     *
     * @var array
     * @see https://ns.editeur.org/onix/de/196
     */
    protected static $de = [
        '00' => 'Zugänglichkeit-Zusammenfassung',
        '01' => 'LIA-Konformitätsplan',
        '02' => 'EPUB Accessibility Specification 1.0 A',
        '03' => 'EPUB Accessibility Specification 1.0 AA',
        '05' => 'PDF/UA',
        '08' => 'Unbekannte Zugänglichkeit',
        '09' => 'Nicht zugänglich',
        '10' => 'Keine Lesegerät-Zugänglichkeitsoptionen deaktiviert (außer)',
        '11' => 'Inhaltsverzeichnis-Navigation',
        '12' => 'Index-Navigation',
        '13' => 'Lesereihenfolge',
        '14' => 'Kurze Alternativbeschreibungen',
        '15' => 'Vollständige Alternativbeschreibungen',
        '16' => 'Visualisierte Daten auch als nicht-graphische Daten verfügbar',
        '17' => 'Zugänglicher Mathematikinhalt',
        '18' => 'Zugänglicher Chemieinhalt',
        '19' => 'Druckäquivalente Seitennummerierung',
        '20' => 'Synchronisiertes vorab aufgenommenes Audio',
        '21' => 'Text-to-Speech-Hinweise bereitgestellt',
        '22' => 'Sprachkennzeichnung bereitgestellt',
        '23' => 'Zugängliche interaktive Elemente',
        '24' => 'Legbarkeit für Menschen mit Dyslexie',
        '25' => 'Verwendung von Farben',
        '26' => 'Verwendung von Kontrast',
        '27' => 'Zugänglichkeits-Zertifizierung',
        '94' => 'Webseite für Konformität mit detaillierten Zugänglichkeitsinformationen',
        '95' => 'Webseite eines vertrauenswürdigen Vermittlers mit detaillierten Zugänglichkeitsinformationen',
        '96' => 'Webseite des Verlags mit detaillierten Zugänglichkeitsinformationen',
        '97' => 'Kompatibilität getestet',
        '98' => 'Kontakt des vertrauenswürdigen Vermittlers',
        '99' => 'Verlagskontakt für weitere Zugänglichkeitsinformationen',
    ];

    /**
     * Code List 196 for es (Spanish)
     * Detalles de accesibilidad de publicaciones electrónicas
     *
     * @var array
     * @see https://ns.editeur.org/onix/es/196
     */
    protected static $es = [
        '00' => 'Resumen de accesibilidad',
        '01' => 'Esquema de conformidad LIA',
        '02' => 'Especificación de accesibilidad EPUB 1.0 A',
        '03' => 'Especificación de accesibilidad EPUB 1.0 AA',
        '05' => 'PDF/UA',
        '08' => 'Accesibilidad desconocida',
        '09' => 'Inaccesible',
        '10' => 'No está desactivada ninguna opción de accesibilidad al sistema de lectura (Con excepciones)',
        '11' => 'Navegación en la tabla de contenidos',
        '12' => 'Índice navegable',
        '13' => 'Orden de lectura',
        '14' => 'Descripciones alternativas cortas',
        '15' => 'Descripciones alternativas completas',
        '16' => 'Visualizaciones de datos también disponibles en forma no gráfica',
        '17' => 'Contenido matemático accesible',
        '18' => 'Contenido de notación química accesible',
        '19' => 'Numeración de páginas equivalente a la de la versión impresa',
        '20' => 'Audio pregrabado sincronizado',
        '21' => 'Incluye pistas para la síntesis de voz',
        '22' => 'Incluye etiquetado de idioma',
        '23' => 'Elementos interactivos accesibles',
        '24' => 'Legibilidad para personas con dislexia',
        '25' => 'Uso del color',
        '26' => 'Uso del contraste',
        '27' => 'Certificación de accesibilidad',
        '94' => 'Página web de certificación, con información detallada de accesibilidad',
        '95' => 'Página web de un intermediario de confianza, con información detallada de accesibilidad',
        '96' => 'Página web de la editorial, con información detallada de accesibilidad',
        '97' => 'Testeado para compatibilidad',
        '98' => 'Contacto de intermediario de confianza',
        '99' => 'Contacto en la editorial para más información sobre accesibilidad',
    ];

    /**
     * Code List 196 for it (Italian)
     * Dettagli di accessibilità per e-pubblicazioni
     *
     * @var array
     * @see https://ns.editeur.org/onix/it/196
     */
    protected static $it = [
        '00' => 'Riepilogo accessibilità',
        '01' => 'Schema di conformità LIA',
        '02' => 'Specifica di accessibilità EPUB 1.0 A',
        '03' => 'Specifica di accessibilità EPUB 1.0 AA',
        '05' => 'PDF/UA',
        '08' => 'Accessibilità sconosciuta',
        '09' => 'Non accessibile',
        '10' => "Nessuna opzione di accessibilità del sistema di lettura disabilitata (eccetto)",
        '11' => 'Navigazione nel sommario',
        '12' => 'Navigazione nell\'indice',
        '13' => 'Ordine di lettura',
        '14' => 'Descrizioni alternative brevi',
        '15' => 'Descrizioni alternative complete',
        '16' => 'Dati visualizzati anche disponibili come dati non grafici',
        '17' => 'Contenuto matematico accessibile',
        '18' => 'Contenuto chimico accessibile',
        '19' => 'Numerazione delle pagine equivalente alla versione stampata',
        '20' => 'Audio preregistrato sincronizzato',
        '21' => 'Forniti suggerimenti per la sintesi vocale',
        '22' => 'Fornita etichettatura linguistica',
        '23' => 'Elementi interattivi accessibili',
        '24' => 'Leggibilità per dislessici',
        '25' => 'Utilizzo del colore',
        '26' => 'Utilizzo del contrasto',
        '27' => 'Certificazione di accessibilità',
        '94' => "Pagina web di conformità per informazioni dettagliate sull'accessibilità",
        '95' => "Pagina web di un intermediario fidato per informazioni dettagliate sull'accessibilità",
        '96' => "Pagina web dell'editore per informazioni dettagliate sull'accessibilità",
        '97' => 'Compatibilità testata',
        '98' => 'Contatto intermediario fidato',
        '99' => "Contatto editore per ulteriori informazioni sull'accessibilità",
    ];

    /**
     * Code List 196 for tr (Turkish)
     * E-yayın erişilebilirlik detayları
     *
     * @var array
     * @see https://ns.editeur.org/onix/tr/196
     */
    protected static $tr = [
        '00' => 'Erişilebilirlik özeti',
        '01' => 'LIA Uyum Planı',
        '02' => 'EPUB Erişilebilirlik Spesifikasyonu 1.0 A',
        '03' => 'EPUB Erişilebilirlik Spesifikasyonu 1.0 AA',
        '05' => 'PDF/UA',
        '08' => 'Bilinmeyen erişilebilirlik',  // NEW in Issue 70
        '09' => 'Erişilemez',
        '10' => 'Okuma sistemi erişilebilirlik seçenekleri devre dışı bırakılmadı (istisnalar hariç)',
        '11' => 'İçindekiler tablosu gezinimi',
        '12' => 'İndeks gezinimi',
        '13' => 'Okuma sırası',
        '14' => 'Kısa alternatif açıklamalar',
        '15' => 'Tam alternatif açıklamalar',
        '16' => 'Görselleştirilmiş veriler ayrıca grafik olmayan veri olarak da mevcut',
        '17' => 'Erişilebilir matematik içeriği',
        '18' => 'Erişilebilir kimya içeriği',
        '19' => 'Baskı eşdeğeri sayfa numaralandırması',
        '20' => 'Senkronize önceden kaydedilmiş ses',
        '21' => 'Metin-konuşma ipuçları sağlandı',
        '22' => 'Dil etiketleme sağlandı',
        '23' => 'Erişilebilir etkileşimli öğeler',  // NEW in Issue 65
        '24' => 'Disleksi okunabilirliği',
        '25' => 'Renk kullanımı',
        '26' => 'Kontrast kullanımı',
        '27' => 'Erişilebilirlik sertifikasyonu',  // NEW in Issue 68
        '94' => 'Detaylı erişilebilirlik bilgileri için uyum web sayfası',
        '95' => 'Detaylı erişilebilirlik bilgileri için güvenilir aracı web sayfası',
        '96' => 'Detaylı erişilebilirlik bilgileri için yayıncı web sayfası',
        '97' => 'Uyumluluk test edildi',
        '98' => 'Güvenilir aracı iletişim',
        '99' => 'Daha fazla erişilebilirlik bilgisi için yayıncı iletişim',
    ];
}