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
    cena: 207,
    kassa: 135,
    tt: 255,
    perMonth: 597,    // 207 + 135 + 255 = 597
    perPeriod: 1791,  // (207 + 135 + 255) * 3 = 597 * 3 = 1791
    discount: 13,
    install: 590,
  },
  {
    id: "3",
    months: 6,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 174,
    kassa: 270,
    tt: 510,
    perMonth: 954,    // 174 + 270 + 510 = 954
    perPeriod: 5724,  // (174 + 270 + 510) * 6 = 954 * 6 = 5724
    discount: 30,
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
