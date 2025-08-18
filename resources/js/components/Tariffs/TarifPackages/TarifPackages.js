import { Card, Flex, Grid, SegmentedControl, Text } from "@mantine/core";
import { TarifCompareModal } from "./TarifCompareModal/TarifCompareModal";
import { useDisclosure } from "@mantine/hooks";
import { useState } from "react";

export const TarifPackages = () => {
  const [opened, { close, open }] = useDisclosure(false);

  const handleTariff = () => {
    window.location.href = "https://umag-main.kz/page57741021.html";
  };
  const [month, setMonth] = useState(6);

  const getSum = () => {
    switch (month) {
      case 1:
        return "19.900 ₸";
      case 3:
        return "15.900 ₸";
      case 6:
        return "14.900 ₸";
      default:
        return "19.900 ₸";
    }
  };

  return (
    <Grid gutter={50}>
      <Grid.Col span={6} py={0} />
      <Grid.Col span={6} py={0}>
        <SegmentedControl
          w="100%"
          styles={{
            label: {
              padding: "5px 0",
              color: "#a6a6a6",
              fontSize: "14px",
              lineHeight: "24px",
              fontWeight: 600,
              marginBottom: 0,
            },
            root: {
              fontFamily: 'Montserrat',
              borderRadius: "50px",
              marginTop: "10px",
            },
            controlActive: {
              backgroundColor: "#fff",
              borderRadius: "50px",
            },
            indicator: { borderRadius: "50px" },
          }}
          value={month}
          data={[
            { label: "1 месяц", value: 1 },
            { label: "3 месяца", value: 3 },
            { label: "6 месяцев", value: 6 },
          ]}
          onChange={setMonth}
        />
      </Grid.Col>
      <Grid.Col span={6}>
        <Card
          shadow="sm"
          padding="lg"
          radius={50}
          withBorder
          className="tariffs-card"
        >
          <Card.Section p={40}>
            <Flex direction="column" justify="space-between">
              <Flex direction="column" h="120px" justify="space-between">
                <div>
                  <h3 className="tariffs-card-caption">Start</h3>
                  <p className="tariffs-card-subCaption">
                    Для растущих магазинов
                  </p>
                </div>
                <Flex align="center" mb={20}>
                  <Text className="tariffs-card-textBig">6.900 ₸ </Text>
                  <Text className="tariffs-card-textSmall">/ в месяц</Text>
                </Flex>
              </Flex>
              <button className="tariffs-card-btn" onClick={handleTariff}>
                Выбрать тариф
              </button>
              <Flex direction="column">
                <p className="tariffs-card-text tariffs-card-face">
                  Только 1 пользователь
                </p>
                <p className="tariffs-card-text tariffs-card-computer">
                  Только 1 касса
                </p>
                <p className="tariffs-card-text tariffs-card-shop">
                  Только 1 торговая точка
                </p>
              </Flex>
            </Flex>
          </Card.Section>
        </Card>
      </Grid.Col>
      <Grid.Col span={6}>
        <Card
          shadow="sm"
          padding="lg"
          radius={50}
          withBorder
          className="tariffs-card tariffs-card-active"
        >
          <Card.Section p={40}>
            <Flex direction="column" justify="space-between">
              <Flex direction="column" h="120px" justify="space-between">
                <Flex align="center">
                  <h3 className="tariffs-card-caption">Standart</h3>
                  <span className="tariffs-card-tag">Популярный</span>
                </Flex>
                <p className="tariffs-card-subCaption">
                  Полная автоматизация магазина
                </p>
                <Flex align="center" mb={20}>
                  <Text className="tariffs-card-textMedium">от</Text>
                  <Text className="tariffs-card-textBig">{getSum()}</Text>
                  <Flex direction="column" ml={10}>
                    <Text className="tariffs-card-textExtraSmall">в месяц</Text>
                    <Text className="tariffs-card-textExtraSmall">
                      при полугодовой оплате
                    </Text>
                  </Flex>
                </Flex>
              </Flex>
              <button
                className="tariffs-card-btn tariffs-card-btn-active"
                onClick={handleTariff}
              >
                Выбрать тариф
              </button>
              <Flex direction="column">
                <p className="tariffs-card-text tariffs-card-face">
                  200 пользователей
                </p>
                <p className="tariffs-card-text tariffs-card-computer">
                  Неограниченное кол-во касс
                </p>
                <p className="tariffs-card-text tariffs-card-shop">
                  Неограниченное кол-во точек
                </p>
              </Flex>
            </Flex>
          </Card.Section>
        </Card>
      </Grid.Col>
      <Grid.Col span={12}>
        <Flex justify="center" mb={50}>
          <button className="tariffs-modal-btn" onClick={open}>
            Сравнить тарифы
          </button>
        </Flex>
      </Grid.Col>
      <TarifCompareModal
        show={opened}
        close={close}
        handleTariff={handleTariff}
      />
    </Grid>
  );
};
