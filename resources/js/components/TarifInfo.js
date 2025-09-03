import { Flex, Grid, SegmentedControl, Text } from "@mantine/core";
import { useState } from "react";
import "./css/TarifInfo.css";

export const TarifInfo = ({ tariffs, chosenTarif, setChosenTarif }) => {
  const locale = window.currentLang;
  const [tarifId, setTarifId] = useState("1");
  const [kassaCount, setKassaCount] = useState(1);
  const [ttCount, setTTCount] = useState(1);

  const handleChosenTarif = (val) => {
    setTarifId(val);
    const tariffsCopy = [...tariffs];
    setChosenTarif(tariffsCopy?.find((item) => item.id === val));
  };

  const decreaseKassa = () => {
    if (kassaCount > 1) {
      setKassaCount(kassaCount - 1);
    }
  };

  const increaseKassa = () => {
    setKassaCount(kassaCount + 1);
  };

  const decreaseTT = () => {
    if (ttCount > 1) {
      setTTCount(ttCount - 1);
    }
  };

  const increaseTT = () => {
    setTTCount(ttCount + 1);
  };

  const handleTariff = () => {
    window.location.href = "https://umag.tj/request-form";
  };

  return (
    <Flex className="tarif" direction="column">
      <Text className="tarif-caption">
        Арзиши тарофаро ҳисоб кунед
      </Text>
      <SegmentedControl
        value={tarifId}
        onChange={handleChosenTarif}
        styles={{
          root: {
            borderRadius: 50,
            overflow: "visible",
            height: 48,
          },
          control: {
            display: "flex",
            alignItems: "center",
            width: "100%",
          },
          innerLabel: {
            width: "100%",
          },
          label: {
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            overflow: "visible",
            height: 40,
            width: "100%",
          },
          indicator: {
            borderRadius: 50,
          },
        }}
        data={tariffs?.map((item, key) => ({
          label: (
            <>
              <div
                style={{
                  position: "relative",
                  textAlign: "center",
                  width: "100%",
                }}
              >
                {item.discount && (
                  <Text size="xs" className="tarif-discount">
                    {item.discount}
                  </Text>
                )}
                <Text className="tarif-discount-text">
                  { item.months }{ " " }
                  { key === 0 ? "моҳ" : "моҳҳо" }
                </Text>
              </div>
            </>
          ),
          value: item.id,
        }))}
      />
      <Grid className="tarif-counter-margin" gutter={{ base: 64, sm: 80 }}>
        <Grid.Col span={6}>
          <Flex direction="column" justify="center" miw={150}>
            <Text className="tarif-counterText">
              Хазинаҳо
            </Text>
            <Flex className="tarif-counter-block" justify="space-between">
              <img
                onClick={() => decreaseKassa()}
                className="tarif-counter-button tarif-minus"
                src="/images/tarrifs/minus.svg"
              />
              <Text className="tarif-counter">{kassaCount}</Text>
              <img
                onClick={() => increaseKassa()}
                className="tarif-counter-button tarif-plus"
                src="/images/tarrifs/plus.svg"
              />
            </Flex>
          </Flex>
        </Grid.Col>
        <Grid.Col span={6}>
          <Flex direction="column" justify="center" miw={150}>
            <Text className="tarif-counterText">
              Нуқтаҳои савдо
            </Text>
            <Flex className="tarif-counter-block" justify="space-between">
              <img
                onClick={() => decreaseTT()}
                className="tarif-counter-button tarif-minus"
                src="/images/tarrifs/minus.svg"
              />
              <Text className="tarif-counter">{ttCount}</Text>
              <img
                onClick={() => increaseTT()}
                className="tarif-counter-button tarif-plus"
                src="/images/tarrifs/plus.svg"
              />
            </Flex>
          </Flex>
        </Grid.Col>
      </Grid>
      <Flex direction="column" className="tarif-info-block">
        <Flex direction="column">
          <Flex justify="space-between" mb={16}>
            <Text className="tarif-info-caption">
              Тарофаи шумо
            </Text>
            <Text className="tarif-info-text tarif-info-mobile" c="#5C5C5C">
              барои давра
            </Text>
          </Flex>
          <Flex justify="space-between" mb={12}>
            <Text className="tarif-info-text">
              Обуна
            </Text>
            <Flex>
              <Text className="tarif-info-text">{`${chosenTarif?.cena}`}</Text>
              <Text
                className="tarif-info-text tarif-info-mobile"
                ml={5}
                c="#5C5C5C"
              >
                { chosenTarif?.currency_tj }
              </Text>
              <Text
                className="tarif-info-text tarif-info-desktop"
                ml={5}
                c="#5C5C5C"
              >
                { chosenTarif?.currency_tj }
              </Text>
            </Flex>
          </Flex>
          <Flex justify="space-between" mb={12}>
            <Text className="tarif-info-text">
              Хазинаҳо X {kassaCount}
            </Text>
            <Flex>
              <Text className="tarif-info-text">
                {kassaCount * chosenTarif?.kassa}
              </Text>
              <Text
                className="tarif-info-text tarif-info-mobile"
                ml={5}
                c="#5C5C5C"
              >
                { chosenTarif?.currency_tj }
              </Text>
              <Text
                className="tarif-info-text tarif-info-desktop"
                ml={5}
                c="#5C5C5C"
              >
                { chosenTarif?.currency_tj }
              </Text>
            </Flex>
          </Flex>
          <Flex justify="space-between" mb={12}>
            <Text className="tarif-info-text">
              Нуқтаҳои савдо X{" "}
              {ttCount}
            </Text>
            <Flex>
              <Text className="tarif-info-text">
                {ttCount * chosenTarif?.tt}
              </Text>
              <Text
                className="tarif-info-text tarif-info-mobile"
                ml={5}
                c="#5C5C5C"
              >
                { chosenTarif?.currency_tj }
              </Text>
              <Text
                className="tarif-info-text tarif-info-desktop"
                ml={5}
                c="#5C5C5C"
              >
                { chosenTarif?.currency_tj }
              </Text>
            </Flex>
          </Flex>
          <Flex justify="space-between" align="center" mb={12}>
            <Text className="tarif-info-text" fw={700}>
              Ҳамагӣ
            </Text>
            <Flex align="baseline">
              <Text className="tarif-info-total">
                {chosenTarif?.months *
                  (chosenTarif?.cena +
                    ttCount * chosenTarif?.tt +
                    kassaCount * chosenTarif?.kassa)}
              </Text>
              <Text
                fw={700}
                className="tarif-info-text tarif-info-mobile"
                ml={5}
              >
                { chosenTarif?.currency_tj }
              </Text>
              <Text
                fw={700}
                className="tarif-info-text tarif-info-desktop"
                ml={5}
              >
                { chosenTarif?.currency_tj }{" "}
                барои давра
              </Text>
            </Flex>
          </Flex>
          <Flex justify="space-between" mb={12}>
            <Text className="tarif-info-text" c="#1D793C">
              Сарфакорӣ
            </Text>
            <Flex>
              <Text className="tarif-info-text" c="#1D793C">
                {(chosenTarif?.cena - tariffs[0]?.cena) * chosenTarif?.months}
              </Text>
              <Text
                className="tarif-info-text tarif-info-mobile"
                ml={5}
                c="#1D793C"
              >
                { chosenTarif?.currency_tj }
              </Text>
              <Text className="tarif-info-text tarif-info-desktop" ml={5}>
                { chosenTarif?.currency_tj }{" "}
                барои давра
              </Text>
            </Flex>
          </Flex>
          <Flex justify="space-between" mb={12}>
            <Text className="tarif-info-text">
              Насб ва таълим
            </Text>
            <Flex>
              <Text className="tarif-info-text">{chosenTarif?.install}</Text>
              <Text className="tarif-info-text" ml={5} c="#5C5C5C">
                { chosenTarif?.currency_tj }
              </Text>
            </Flex>
          </Flex>
        </Flex>
        <button className="tarif-info-link" onClick={handleTariff}>
          Дархост гузоред
        </button>
        <Flex className="tarif-warning-block" align="flex-start">
          <img
            src="/images/tarrifs/info.svg"
            className="tarif-warning-icon"
            alt="info icon"
          />
          <Text className="tarif-warning-text">
            Дархост гузоред — менеҷер дар давоми рӯзи корӣ бо шумо тамос мегирад, ба ҳама саволҳо ҷавоб медиҳад ва дар пайвастшавӣ кӯмак мекунад.
          </Text>
        </Flex>
      </Flex>
    </Flex>
  );
};
