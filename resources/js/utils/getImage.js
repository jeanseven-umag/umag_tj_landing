import mainImg from "../../../public/img/knowledge-img/main.png";
import reportImg from "../../../public/img/knowledge-img/reports.png";
import salesImg from "../../../public/img/knowledge-img/sales.png";
import purchasesImg from "../../../public/img/knowledge-img/purchases.png";
import bookImg from "../../../public/img/knowledge-img/book.png";
import manImg from "../../../public/img/knowledge-img/man.png";
import settingsImg from "../../../public/img/knowledge-img/settings.png";
import cashImg from "../../../public/img/knowledge-img/cash.png";
import penImg from "../../../public/img/knowledge-img/pen.png";
import walletImg from "../../../public/img/knowledge-img/wallet.png";

export const getImage = (categoryName) => {
  switch (categoryName) {
    case "Асосӣ": //Главная
      return mainImg;
    case "Ҳисоботҳо": //Отчеты
      return reportImg;
    case "Фурӯш:": //Продажи
      return salesImg;
    case "Харидҳо": //Закупки
      return purchasesImg;
    case "Мол": //Товары
      return bookImg;
    case "Контрагенты": //Контрагенты Контрагентҳо
      return manImg;
    case "Идоракунӣ": //Управление
      return settingsImg;
    case "Молия": //Финансы
      return cashImg;
    case "Профиль": //Профиль
      return penImg;
    case "Обуна": //Подписка
      return walletImg;
    case "Қабул": //Приемка
      return bookImg;
    case "Таҷдиди назар": //Ревизия
      return bookImg;
    default:
      return "";
  }
};
