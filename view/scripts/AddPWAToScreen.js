// Detection si l'appareil est IOS
const isIos = () => {
    const userAgent = window.navigator.userAgent.toLowerCase();
    return /iphone|ipad|ipod/.test( userAgent );
}
// Detection si l'applciation est deja en PWA
const isInStandaloneMode = () => ('standalone' in window.navigator) && (window.navigator.standalone);
  
// Verification s'il afficher le popup d'ajout sur la homepage
if (isIos() && !isInStandaloneMode()) {
    this.setState({ showInstallMessage: true });
}