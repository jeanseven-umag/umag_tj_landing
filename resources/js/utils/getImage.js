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
    case "Главная":
      return mainImg;
    case "Отчеты":
      return reportImg;
    case "Продажи":
      return salesImg;
    case "Закупки":
      return purchasesImg;
    case "Товары":
      return bookImg;
    case "Контрагенты":
      return manImg;
    case "Управление":
      return settingsImg;
    case "Финансы":
      return cashImg;
    case "Профиль":
      return penImg;
    case "Подписка":
      return walletImg;
    case "Приемка":
      return bookImg;
    case "Ревизия":
      return bookImg;
    default:
      return "";
  }
};
