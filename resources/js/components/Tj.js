import "./css/Uz.css";
import { useEffect, useState } from "react";
import { TarifInfo } from "./TarifInfo";
import { TarifStructure } from "./TarifStructure";
import { TarifDignity } from "./TarifDignity";

const tariffs = [
  {
    id: "1",
    months: 1,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 99,
    kassa: 45,
    tt: 85,
    perMonth: 229,    // 99 + 45 + 85 = 229
    perPeriod: 229,   // (99 + 45 + 85) * 1 = 229
    discount: null,
    install: 590,
  },
  {
    id: "2",
    months: 3,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 69,
    kassa: 45,
    tt: 85,
    perMonth: 179,    // 69 + 45 + 85 = 179
    perPeriod: 537,  // (69 + 45 + 85) * 3 = 179 * 3 = 537
    discount: "~13%",
    install: 590,
  },
  {
    id: "3",
    months: 6,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 29,
    kassa: 45,
    tt: 85,
    perMonth: 159,    // 29 + 45 + 85 = 159
    perPeriod: 954,  // (29 + 45 + 85) * 6 = 159 * 6 = 954
    discount: "~30%",
    install: 590,
  },
];

export const Tj = () => {
  const [chosenTarif, setChosenTarif] = useState();

  useEffect(() => {
    const copy = [...tariffs];
    setChosenTarif(copy[0]);
  }, []);

  return (
    <div className="tarif-main">
      {chosenTarif && (
        <TarifInfo
          tariffs={tariffs}
          chosenTarif={chosenTarif}
          setChosenTarif={setChosenTarif}
        />
      )}
      <TarifStructure />
      <TarifDignity />
    </div>
  );
};
